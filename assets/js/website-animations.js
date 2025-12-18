/**
 * Webサイト構築ページのアニメーション
 */

(function() {
  'use strict';

  // Intersection Observer for scroll animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        // 遅延を追加してスタガードアニメーション
        setTimeout(() => {
          entry.target.classList.add('animated');
        }, index * 100);
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // スクロールアニメーションの初期化
  function initScrollAnimations() {
    // すべてのアニメーション対象要素を取得
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    animateElements.forEach(el => observer.observe(el));

    // カード要素のアニメーション
    const cards = document.querySelectorAll('.feature-card, .tech-category, .industry-card, .security-card, .stat-item');
    cards.forEach((card, index) => {
      card.style.transitionDelay = `${index * 0.1}s`;
      observer.observe(card);
    });
  }

  // 数値カウントアップアニメーション
  function animateCounter(element, target, duration = 2000, suffix = '') {
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      element.textContent = Math.floor(current) + suffix;
    }, 16);
  }

  // 実績数値のカウントアップ
  function initCounterAnimations() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const element = entry.target;
          const targetText = element.getAttribute('data-target');
          
          if (targetText) {
            // 数値と単位を分離
            const match = targetText.match(/^(\d+)(.*)$/);
            if (match) {
              const target = parseInt(match[1]);
              const suffix = match[2];
              element.classList.add('counting');
              animateCounter(element, target, 2000, suffix);
              counterObserver.unobserve(element);
            }
          }
        }
      });
    }, { threshold: 0.5 });

    statNumbers.forEach(num => counterObserver.observe(num));
  }

  // ハイライトテキストのアニメーション
  function initHighlightAnimations() {
    const highlights = document.querySelectorAll('.infinity-highlight');
    
    const highlightObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('animated');
          }, 300);
          highlightObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.8 });

    highlights.forEach(hl => highlightObserver.observe(hl));
  }

  // パララックス効果
  function initParallax() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    if (parallaxElements.length === 0) return;

    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      
      parallaxElements.forEach(el => {
        const speed = el.getAttribute('data-parallax') || 0.5;
        const yPos = -(scrolled * speed);
        el.style.transform = `translateY(${yPos}px)`;
      });
    });
  }

  // ホバーエフェクトの強化
  function initHoverEffects() {
    const cards = document.querySelectorAll('.feature-card, .industry-card, .tech-category');
    
    cards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px) scale(1.02)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
      });
    });
  }

  // スムーススクロール
  function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
      link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  // アニメーションの遅延読み込み
  function initLazyAnimations() {
    // ページ読み込み時のアニメーション
    setTimeout(() => {
      const hero = document.querySelector('.infinity-hero-section');
      if (hero) {
        hero.classList.add('loaded');
      }
    }, 100);
  }

  // テキストのタイプライター効果（オプション）
  function typeWriter(element, text, speed = 50) {
    let i = 0;
    element.textContent = '';
    
    function type() {
      if (i < text.length) {
        element.textContent += text.charAt(i);
        i++;
        setTimeout(type, speed);
      }
    }
    
    type();
  }

  // 初期化関数
  function init() {
    // DOMが完全に読み込まれてから実行
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', init);
      return;
    }

    // 各アニメーションの初期化
    initScrollAnimations();
    initCounterAnimations();
    initHighlightAnimations();
    initParallax();
    initHoverEffects();
    initSmoothScroll();
    initLazyAnimations();

    // ページ読み込み完了時のアニメーション
    window.addEventListener('load', () => {
      document.body.classList.add('page-loaded');
    });
  }

  // 初期化実行
  init();

})();
