window.addEventListener('load', () => {
    const blocks = document.querySelectorAll('.link-block');

    blocks.forEach(block => {
        const img1 = block.querySelector('.img1');
        const img2 = block.querySelector('.img2');
        let showingFirst = true;

        // ÉãÅ[ÉvêÿÇËë÷Ç¶ä÷êî
        setInterval(() => {
        if (showingFirst) {
            img1.style.opacity = '0';
            img2.style.opacity = '1';
        } else {
            img1.style.opacity = '1';
            img2.style.opacity = '0';
        }
        showingFirst = !showingFirst;
        }, 5000); // 5ïbÇ≤Ç∆Ç…êÿÇËë÷Ç¶
    });
});