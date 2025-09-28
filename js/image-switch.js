window.addEventListener('load', () => {
  const blocks = document.querySelectorAll('.link-block');

  // 初期状態：すべて img1 を表示（opacityで制御）
  blocks.forEach(block => {
    const img1 = block.querySelector('.img1');
    const img2 = block.querySelector('.img2');
    img1.style.opacity = '1';
    img2.style.opacity = '0';
  });

  // 順番に切り替える関数（ふんわりフェード）
  setInterval(() => {
    blocks.forEach(block => {
      const img1 = block.querySelector('.img1');
      const img2 = block.querySelector('.img2');
      const isImg1Visible = parseFloat(img1.style.opacity) > 0.5;

      if (isImg1Visible) {
        img1.style.opacity = '0';
        img2.style.opacity = '1';
      } else {
        img1.style.opacity = '1';
        img2.style.opacity = '0';
      }
    });
  }, 4000);
});