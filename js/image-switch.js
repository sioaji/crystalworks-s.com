window.addEventListener('load', () => {
  const blocks = document.querySelectorAll('.link-block');

  // ������ԁF���ׂ� img1 ��\��
  blocks.forEach(block => {
    const img1 = block.querySelector('.img1');
    const img2 = block.querySelector('.img2');
    img1.classList.add('visible');
    img1.classList.remove('hidden');
    img2.classList.add('hidden');
    img2.classList.remove('visible');
  });

  // ���Ԃɐ؂�ւ���֐�
  setInterval(() => {
    blocks.forEach(block => {
      const img1 = block.querySelector('.img1');
      const img2 = block.querySelector('.img2');
      const isImg1Visible = img1.classList.contains('visible');

      if (isImg1Visible) {
        img1.classList.remove('visible');
        img1.classList.add('hidden');
        img2.classList.remove('hidden');
        img2.classList.add('visible');
      } else {
        img1.classList.remove('hidden');
        img1.classList.add('visible');
        img2.classList.remove('visible');
        img2.classList.add('hidden');
      }
    });
  }, 3000);
});