const http = require('http');

http.get('http://127.0.0.1:8000', (res) => {
    let data = '';
    res.on('data', (chunk) => {
        data += chunk;
    });
    res.on('end', () => {
        const startIdx = data.indexOf('<section class="foundida-services-sec">');
        if (startIdx === -1) {
            console.log('Services section NOT found in HTML!');
            return;
        }
        const endIdx = data.indexOf('</section>', startIdx) + 10;
        console.log('--- FOUND SERVICES SECTION ---');
        console.log(data.substring(startIdx, endIdx));
    });
}).on('error', (err) => {
    console.error('Error fetching page:', err.message);
});
