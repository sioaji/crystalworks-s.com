window.addEventListener('load', () => {
  const blocks = document.querySelectorAll('.link-block');
  let currentIndex = 0;

  // 初期状態：すべて img1 を表示
  blocks.forEach(block => {
    block.querySelector('.img1').style.opacity = '1';
    block.querySelector('.img2').style.opacity = '0';
  });

  // 順番に切り替える関数
  setInterval(() => {
    const block = blocks[currentIndex];
    const img1 = block.querySelector('.img1');
    const img2 = block.querySelector('.img2');

    // トグル切り替え
    if (img1.style.opacity === '1') {
      img1.style.opacity = '0';
      img2.style.opacity = '1';
    } else {
      img1.style.opacity = '1';
      img2.style.opacity = '0';
    }

    // 次のインデックスへ
    currentIndex = (currentIndex + 1) % blocks.length;
  }, 3000); // 3秒ごとに1つずつ切り替え
});