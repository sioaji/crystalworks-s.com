window.addEventListener('load', () => {
setTimeout(() => {
    document.querySelectorAll('.link-block').forEach(block => {
    const img1 = block.querySelector('.img1');
    const img2 = block.querySelector('.img2');
    img1.style.opacity = '0';
    img2.style.opacity = '1';
    });
}, 3000); // 3•bŒã‚ÉØ‚è‘Ö‚¦
});