window.addEventListener('load', () => {
  const blocks = document.querySelectorAll('.link-block');
  let currentIndex = 0;

  // ������ԁF���ׂ� img1 ��\��
  blocks.forEach(block => {
    block.querySelector('.img1').style.opacity = '1';
    block.querySelector('.img2').style.opacity = '0';
  });

  // ���Ԃɐ؂�ւ���֐�
  setInterval(() => {
    const block = blocks[currentIndex];
    const img1 = block.querySelector('.img1');
    const img2 = block.querySelector('.img2');

    // �g�O���؂�ւ�
    if (img1.style.opacity === '1') {
      img1.style.opacity = '0';
      img2.style.opacity = '1';
    } else {
      img1.style.opacity = '1';
      img2.style.opacity = '0';
    }

    // ���̃C���f�b�N�X��
    currentIndex = (currentIndex + 1) % blocks.length;
  }, 3000); // 3�b���Ƃ�1���؂�ւ�
});