// 6種類のLPタイプセクション - トグル機能
document.addEventListener('DOMContentLoaded', function() {
  const toggleButtons = document.querySelectorAll('.lp-type-toggle');
  
  toggleButtons.forEach(button => {
    button.addEventListener('click', function() {
      const card = this.closest('.lp-type-card-compact');
      const details = card.querySelector('.lp-type-details');
      
      // トグル状態を切り替え
      details.classList.toggle('active');
      
      // ボタンのテキストを変更
      if (details.classList.contains('active')) {
        this.textContent = '閉じる';
      } else {
        this.textContent = '詳細を見る';
      }
    });
  });
});
