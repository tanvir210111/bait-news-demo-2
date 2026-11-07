const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 3000;
const BASE_DIR = __dirname;

const MIME_TYPES = {
    '.html': 'text/html; charset=utf-8',
    '.css': 'text/css; charset=utf-8',
    '.js': 'application/javascript; charset=utf-8',
    '.json': 'application/json; charset=utf-8',
    '.png': 'image/png',
    '.jpg': 'image/jpeg',
    '.jpeg': 'image/jpeg',
    '.gif': 'image/gif',
    '.svg': 'image/svg+xml',
    '.ico': 'image/x-icon',
    '.ttf': 'font/ttf',
    '.woff': 'font/woff',
    '.woff2': 'font/woff2',
    '.eot': 'application/vnd.ms-fontobject',
    '.mp3': 'audio/mpeg'
};

const server = http.createServer((req, res) => {
    let reqUrl = decodeURI(req.url.split('?')[0]);
    if (reqUrl === '/') reqUrl = '/index.html';

    let filePath = path.join(BASE_DIR, reqUrl);

    // Check if direct file exists
    fs.stat(filePath, (err, stats) => {
        if (!err && stats.isFile()) {
            return sendFile(filePath, res);
        }

        // Try appending .html (clean URLs)
        const htmlPath = filePath + '.html';
        fs.stat(htmlPath, (err2, stats2) => {
            if (!err2 && stats2.isFile()) {
                return sendFile(htmlPath, res);
            }

            // Check if directory with index.html
            const dirIndex = path.join(filePath, 'index.html');
            fs.stat(dirIndex, (err3, stats3) => {
                if (!err3 && stats3.isFile()) {
                    return sendFile(dirIndex, res);
                }

                // If not found, fallback to index.html for SPA/dynamic routing
                const fallback = path.join(BASE_DIR, 'index.html');
                sendFile(fallback, res, 200);
            });
        });
    });
});

function sendFile(filePath, res, statusCode = 200) {
    const ext = path.extname(filePath).toLowerCase();
    const contentType = MIME_TYPES[ext] || 'application/octet-stream';

    fs.readFile(filePath, (err, content) => {
        if (err) {
            res.writeHead(500, { 'Content-Type': 'text/plain' });
            res.end('500 Server Error');
            return;
        }
        res.writeHead(statusCode, {
            'Content-Type': contentType,
            'Access-Control-Allow-Origin': '*'
        });
        res.end(content);
    });
}

server.listen(PORT, () => {
    console.log(`Server live on http://localhost:${PORT}`);
});

