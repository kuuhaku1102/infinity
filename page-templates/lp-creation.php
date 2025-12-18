<?php

/* Template Name: lp */

get_header();

?>

<section class="infinity-section">

  <div class="infinity-container">



    <!-- メインビジュアル（ダミー画像） -->

	<svg viewBox="0 0 800 240" xmlns="http://www.w3.org/2000/svg">

  <style>

    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');



    text {

      font-family: 'Dancing Script', cursive;

      font-size: 68px;

      text-anchor: middle;

    }



    .stroke {

      fill: none;

      stroke: #000;

      stroke-width: 2;

      stroke-dasharray: 2000;

      stroke-dashoffset: 2000;

      animation: draw 2s ease-out forwards;

    }



    .fill {

      fill: #000;

      opacity: 0;

      animation: fillIn 1.2s ease-out forwards;

      animation-delay: 2s;

    }



    .line2-stroke {

      animation-delay: 1s;

    }



    .line2-fill {

      animation-delay: 3s;

    }



    @keyframes draw {

      to {

        stroke-dashoffset: 0;

      }

    }



    @keyframes fillIn {

      to {

        opacity: 1;

      }

    }

  </style>



  <!-- 1行目 -->

  <text x="50%" y="90" class="stroke">Landing Page</text>

  <text x="50%" y="90" class="fill">Landing Page</text>



  <!-- 2行目 -->

  <text x="50%" y="180" class="stroke line2-stroke">CREATION</text>

  <text x="50%" y="180" class="fill line2-fill">CREATION</text>

</svg>







    <div class="infinity-title">成果直結型LP制作で<br>ビジネスに<span style="color:#ffb300;">"無限の可能性"</span>を</div>

	  

    <div class="infinity-lead">

      AI × Web制作・運用のプロ集団が<br>ビジネスを次のステージへ。

    </div>

    
    <!-- LP制作の課題と重要性セクション（新規追加） -->
    <section class="lp-challenge-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 80px 20px; margin: 60px 0; border-radius: 20px; color: white;">
      <h3 style="color: white; text-align: center; margin-bottom: 40px;">
        LP制作の課題と重要性
        <span class="infinity-badge" style="background: rgba(255,255,255,0.2); color: white; margin-left: 10px;">なぜ多くのLPが集客に失敗するのか？</span>
      </h3>
      
      <div class="infinity-feature-row" style="display: flex; gap: 40px; align-items: center; flex-wrap: wrap;">
        <div class="infinity-feature-left" style="flex: 1; min-width: 300px;">
          <h4 style="color: white; font-size: 24px; margin-bottom: 20px;">現状の課題</h4>
          <p style="color: rgba(255,255,255,0.95); line-height: 1.8; margin-bottom: 30px;">
            多くの企業は「集客できない」「問い合わせが少ない」「コンバージョン率が低い」といった課題を抱えています。原因は複数のスキルセットが必要なLP制作を1社で完結できていないことにあります。
          </p>
          
          <h4 style="color: white; font-size: 24px; margin-bottom: 20px;">成功に必要な要素</h4>
          <ul style="color: rgba(255,255,255,0.95); line-height: 2; list-style: none; padding-left: 0;">
            <li style="padding-left: 1.5em; position: relative;">
              <span style="position: absolute; left: 0;">✓</span> サイト制作と継続的な改善スキル
            </li>
            <li style="padding-left: 1.5em; position: relative;">
              <span style="position: absolute; left: 0;">✓</span> 効果的な広告運用の専門知識
            </li>
            <li style="padding-left: 1.5em; position: relative;">
              <span style="position: absolute; left: 0;">✓</span> 心に響くキャッチコピー作成能力
            </li>
            <li style="padding-left: 1.5em; position: relative;">
              <span style="position: absolute; left: 0;">✓</span> データ解析に基づく改善ノウハウ
            </li>
            <li style="padding-left: 1.5em; position: relative;">
              <span style="position: absolute; left: 0;">✓</span> 差別化を生む高度なプログラミング技術
            </li>
          </ul>
        </div>
        
        <div class="infinity-feature-right" style="flex: 1; min-width: 300px; text-align: center;">
          <div style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 15px; backdrop-filter: blur(10px);">
            <div style="font-size: 18px; margin-bottom: 20px; color: rgba(255,255,255,0.9);">CVRファネル</div>
            <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 30px;">
              <div style="background: rgba(255,255,255,0.2); padding: 15px; border-radius: 10px; font-size: 16px;">認知 (Awareness)</div>
              <div style="color: rgba(255,255,255,0.7);">↓</div>
              <div style="background: rgba(255,255,255,0.25); padding: 15px; border-radius: 10px; font-size: 16px;">興味 (Interest)</div>
              <div style="color: rgba(255,255,255,0.7);">↓</div>
              <div style="background: rgba(255,255,255,0.3); padding: 15px; border-radius: 10px; font-size: 16px;">検討 (Consideration)</div>
              <div style="color: rgba(255,255,255,0.7);">↓</div>
              <div style="background: rgba(255,255,255,0.35); padding: 15px; border-radius: 10px; font-size: 16px;">行動 (Action)</div>
              <div style="color: rgba(255,255,255,0.7);">↓</div>
              <div style="background: rgba(255,255,255,0.4); padding: 15px; border-radius: 10px; font-size: 16px; font-weight: bold;">成約 (Conversion)</div>
            </div>
            <div style="background: #ffb300; color: #2d3748; padding: 20px; border-radius: 10px; font-weight: bold; font-size: 18px;">
              効果的なLPはCVRを<br>最大3倍に向上
            </div>
          </div>
        </div>
      </div>
    </section>


    <h3>InfinityDesignが選ばれる理由 <span class="infinity-badge">当社の強み</span></h3>

	  <section class="infinity-cards">

		  <div class="infinity-card">

  <div id="lottie-challenge"><dotlottie-wc src="https://lottie.host/707acac3-8299-4cf5-ba49-cb136431cd61/Ci9uNlPkho.lottie" class="infinity-card-img" speed="1" autoplay loop></dotlottie-wc></div>

  <div class="infinity-card-title">チャレンジ精神</div>

  <ul>

    <li>前例にとらわれない提案力</li>

    <li>「できない」を「どう実現するか」に変える姿勢 <span class="infinity-badge">常にアップデート</span></li>

  </ul>

</div>

<div class="infinity-card">

  <div id="lottie-expert-team">

<dotlottie-wc src="https://lottie.host/290fdbdd-e0c2-4299-b3e3-fcdb98ecf71c/6ucisHUAp0.lottie" class="infinity-card-img" speed="1" autoplay loop></dotlottie-wc></div>

  <div class="infinity-card-title">専門性</div>

  <ul>

    <li>Web制作からマーケティングまで一貫対応</li>

    <li>各分野の専門家による課題解決 <span class="infinity-badge">多様な知見</span></li>

  </ul>

</div>



<div class="infinity-card">

	  <div id="lottie-expert-team">

<dotlottie-wc src="https://lottie.host/9a28ca1e-313a-4566-be8a-31ed28744ed8/bQ0BKfrLce.lottie" speed="1" autoplay loop></dotlottie-wc></div>

  <div class="infinity-card-title">柔軟性</div>

  <ul>

    <li>ニーズ・予算に合わせた柔軟な対応</li>

    <li>スピード納品・変化に強い体制 <span class="infinity-badge">最短2週間納品可</span></li>

  </ul>

</div>



      <div class="infinity-card">

<div id="lottie-expert-team">

<dotlottie-wc src="https://lottie.host/710cd2a8-8282-4008-b709-bc725e606a4f/fhxqn8k9ow.lottie" speed="1" autoplay loop></dotlottie-wc></div>

        <div class="infinity-card-title">成果重視</div>

        <ul>

          <li>制作後もビジネス成果に直結するコンテンツ設計・改善提案</li>

          <li>100件超の実績からROI向上を実現</li>

        </ul>

      </div>

		  	  </section>
    </div>



    

	<section class="feature">

		<h3>他社との違い</h3>

<div class="infinity-feature-row">

  <!-- 左：Lottieアニメ -->

  <div class="infinity-feature-left">

<dotlottie-wc src="https://lottie.host/e1589e7a-66e3-4ddc-a9e8-f0c10ccf7567/8TZCq7I3cV.lottie" class="lottie-large" speed="1" autoplay loop></dotlottie-wc>

  </div>



  <!-- 右：テキストとリスト -->

<div class="infinity-feature-grid">

  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/1c7d9784-1ce6-4abd-8bce-8cdd325e7295/uEzEy9rfCW.lottie" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>成果設計</b>

      <ul class="infinity-list">

        <li>見た目だけでなく、<br><span style="color:#ffb300;">構成・心理導線・集客導線</span>に徹底フォーカス。</li>

            </ul>

    </div>

  </div>



  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/5cfced01-3dde-4069-ba7b-adcc9ca0b47e/mSJWLMxcMO.lottie" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>マーケティング連携</b>

      <ul class="infinity-list">

        <li>広告運用〜データ分析までワンストップで対応。</li>

      </ul>

    </div>

  </div>



  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/8a2d3228-71f7-44b2-9efb-7260e301a454/VhdepkfiRJ.lottie" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>改善提案</b>

      <ul class="infinity-list">

        <li> 納品後も継続的な分析・改善提案で長期成果を追求。</li>

            </ul>

    </div>

  </div>



  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/3aad48c1-8136-4bbc-9c84-09d02db64e30/v8WeEd6Trr.lottie" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>技術領域</b>

      <ul class="infinity-list">

        <li>AI連携/データ可視化/チャットボット/<br>予約システム/診断ツールなど先進機能も実装可能。</li>

            </ul>

    </div>

  </div>

</div>



</div>

</section>



    <h3>Landing Pageサイト制作サービス</h3>
    <div class="infinity-cards2">
      <div class="infinity-card2">
<dotlottie-wc src="https://lottie.host/ec8ae6ee-c182-434e-904c-4cbef679c30c/PB4HHGktSy.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
        <div class="infinity-card2-title">戦略的アプローチ</div>
        <ul>
          <li>独自の <span class="infinity-badge">STICCフレームワーク</span> で現状分析〜戦略設計</li>
          <li>ビジネス成果につながるウェブ戦略を共に構築</li>
        </ul>
      </div>
      <div class="infinity-card2">
<dotlottie-wc src="https://lottie.host/9a61bea2-807e-4ec5-9bed-f593af3f1233/B8286st4Lu.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
        <div class="infinity-card2-title">高品質なコンテンツ制作</div>
        <ul>
          <li>SEO対策も考慮した専門ライターによる質の高い原稿</li>
        </ul>
      </div>
      <div class="infinity-card2">
    
<dotlottie-wc src="https://lottie.host/27ac0dc0-b220-48be-8dd8-8d3e5dc5327f/YNiourUvgW.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
        <div class="infinity-card2-title">デザイン性 × 機能性</div>
        <ul>
          <li>美しく印象的なデザインと直感的なナビゲーション</li>
          <li>レスポンシブ対応で全デバイス快適表示</li>
        </ul>
      </div>
      <div class="infinity-card2">
<dotlottie-wc src="https://lottie.host/498ebcae-06fc-4e14-a55e-39ca3cba28c3/LQMZMbNPLA.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
        <div class="infinity-card2-title">SEO対策・集客支援</div>
        <ul>
          <li>内部構造設計・最新SEO対策を構築段階から実装</li>
        </ul>
      </div>
      <div class="infinity-card2">
<dotlottie-wc src="https://lottie.host/02bff638-490b-450e-899b-46d7140d4cd6/kGidmzFAhc.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
        <div class="infinity-card2-title">システム・機能開発</div>
        <ul>
          <li>チャットボット/予約/会員/診断/AI/データ可視化/API連携など先進機能もOK</li>
        </ul>
      </div>
      <div class="infinity-card2">
<dotlottie-wc src="https://lottie.host/241fe00a-c538-4822-b807-313bca560da6/fQJCe6rS42.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
        <div class="infinity-card2-title">継続的な運用支援</div>
        <ul>
          <li>公開後もアクセス解析・SEO・コンテンツ追加など成長をサポート</li>
          <li>3ヶ月間の無償保証付き</li>
        </ul>
      </div>
    </div>

    <!-- 6種類のLPサービス詳細セクション（新規追加） -->
    <section class="lp-service-types" style="margin: 80px 0;">
      <h3 style="text-align: center; margin-bottom: 60px;">
        選べる6つのLPタイプ
        <span class="infinity-badge" style="margin-left: 10px;">目的に合わせた最適なLP</span>
      </h3>

      <!-- スタンダードLP -->
      <div class="lp-type-card" style="background: white; border-radius: 20px; padding: 50px; margin-bottom: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
          <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">📄</div>
          <div>
            <h4 style="margin: 0; font-size: 28px; color: #2d3748;">スタンダードLP</h4>
            <p style="margin: 5px 0 0 0; color: #667eea; font-weight: bold;">洗練されたデザインと最適な導線設計で成果を最大化</p>
          </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">✨ 特徴</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>最短リリースに最適：王道セクション構成（FV/ベネフィット/社会的証明/比較/FAQ/CTA）を採用</li>
              <li>目的別訴求軸の明確化：ターゲット心理に合わせたコンテンツ設計</li>
              <li>導線と可読性の最適化：ユーザーの視線移動を考慮したUI/UX設計</li>
            </ul>
          </div>

          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">💡 メリット</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>高い汎用性とコスト効率：広告運用からオーガニック流入まで幅広く対応</li>
              <li>低離脱・高CVR設計：CTA追従機能や上中下の複数配置で機会損失を防止</li>
              <li>運用しやすい構造：A/Bテストや改善施策が打ちやすい構成</li>
            </ul>
          </div>
        </div>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #f7fafc;">
          <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">🎯 活用シーン</h5>
          <div style="display: flex; flex-wrap: wrap; gap: 10px;">
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">新サービス告知</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">キャンペーン</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">資料請求獲得</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">採用エントリー</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">無料体験申し込み</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">セミナー集客</span>
          </div>
        </div>
      </div>

      <!-- アンケート型LP -->
      <div class="lp-type-card" style="background: white; border-radius: 20px; padding: 50px; margin-bottom: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
          <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">📊</div>
          <div>
            <h4 style="margin: 0; font-size: 28px; color: #2d3748;">アンケート型LP</h4>
            <p style="margin: 5px 0 0 0; color: #667eea; font-weight: bold;">質問分岐でユーザーニーズを深掘りし、最適な提案へ誘導</p>
          </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">✨ 特徴</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>パーソナライズされた体験：質問分岐によりユーザー一人ひとりに最適化した診断結果や提案を表示</li>
              <li>高品質なリード獲得：回答内容を蓄積することで、確度の高い顧客情報を取得可能</li>
              <li>能動的なアクション誘導：ユーザーが自ら回答することで関心度を高める設計</li>
            </ul>
          </div>

          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">💡 メリット</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>リードの質向上・インサイト取得：顧客の悩みや属性を詳細に把握でき、商談の質が向上</li>
              <li>離脱低減・CVR改善：一方的な訴求ではなく対話形式で進むため、心理的ハードルが低い</li>
              <li>SNS拡散性：診断結果がコンテンツ化しやすく、SNSでのシェアや話題化に最適</li>
            </ul>
          </div>
        </div>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #f7fafc;">
          <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">🎯 活用シーン</h5>
          <div style="display: flex; flex-wrap: wrap; gap: 10px;">
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">美容（肌診断・悩み相談）</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">保険（見積もり診断）</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">不動産（査定シミュレーション）</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">教育（適性検査）</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">人材（キャリア診断）</span>
          </div>
        </div>
      </div>

      <!-- 予約機能付きLP -->
      <div class="lp-type-card" style="background: white; border-radius: 20px; padding: 50px; margin-bottom: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
          <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">📅</div>
          <div>
            <h4 style="margin: 0; font-size: 28px; color: #2d3748;">予約機能付きLP</h4>
            <p style="margin: 5px 0 0 0; color: #667eea; font-weight: bold;">リアルタイム予約・自動連携で機会損失ゼロへ</p>
          </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">✨ 特徴</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>LP内で予約完結：日付/時間選択までLP内で完結し、ユーザーの手間を最小化</li>
              <li>空き枠リアルタイム表示：Googleカレンダー等と連携し、ダブルブッキングを防止</li>
              <li>予約業務の自動化：予約受付からリマインド通知までをシステム化</li>
            </ul>
          </div>

          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">💡 メリット</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>機会損失の防止：24時間365日の自動予約受付により、予約率が向上</li>
              <li>業務効率化：電話対応や日程調整の手間を大幅に削減</li>
              <li>No-Show低減：LINE/メールでの自動リマインドにより来店忘れを防止</li>
            </ul>
          </div>
        </div>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #f7fafc;">
          <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">🎯 活用シーン</h5>
          <div style="display: flex; flex-wrap: wrap; gap: 10px;">
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">クリニック</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">サロン・美容室</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">来店予約</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">個別相談会</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">体験レッスン</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">オンライン面談</span>
          </div>
        </div>
      </div>

      <!-- KW連動型自動バナー表示 -->
      <div class="lp-type-card" style="background: white; border-radius: 20px; padding: 50px; margin-bottom: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
          <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">🔍</div>
          <div>
            <h4 style="margin: 0; font-size: 28px; color: #2d3748;">KW連動型自動バナー表示</h4>
            <p style="margin: 5px 0 0 0; color: #667eea; font-weight: bold;">検索キーワードに応じて最適なバナーを自動表示</p>
          </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">✨ 特徴</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>キーワード自動連動：検索キーワードに応じてFVのバナー画像を自動切り替え</li>
              <li>パーソナライズ訴求：ユーザーの検索意図に合わせたキャッチコピーと画像を表示</li>
              <li>URLパラメータ制御：パラメータ付与だけで動的にコンテンツを出し分け可能</li>
            </ul>
          </div>

          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">💡 メリット</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>CVRの大幅向上：検索意図との整合性が高まり、直帰率低下・CVR向上を実現</li>
              <li>One to Oneマーケティング：ユーザー一人ひとりに最適な訴求を自動で提供</li>
              <li>広告費効率化：1つのLPで複数の検索ニーズに対応し、制作・運用コストを削減</li>
            </ul>
          </div>
        </div>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #f7fafc;">
          <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">🎯 活用シーン</h5>
          <div style="display: flex; flex-wrap: wrap; gap: 10px;">
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">リスティング広告運用</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">SEO流入対策</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">複数商品・サービス展開</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">地域別エリア訴求</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">ターゲット別訴求</span>
          </div>
        </div>
      </div>

      <!-- カウントダウンタイマーLP -->
      <div class="lp-type-card" style="background: white; border-radius: 20px; padding: 50px; margin-bottom: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
          <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">⏱️</div>
          <div>
            <h4 style="margin: 0; font-size: 28px; color: #2d3748;">カウントダウンタイマーLP</h4>
            <p style="margin: 5px 0 0 0; color: #667eea; font-weight: bold;">緊急性と限定感を演出し、購買決定を強力に後押し</p>
          </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">✨ 特徴</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>緊急性・希少性の演出：残り時間を可視化し、心理的な行動喚起を促進</li>
              <li>リアルタイムカウントダウン：1秒単位で刻まれる時間表示が臨場感を提供</li>
              <li>限定感の訴求：期間限定キャンペーンや先着特典に最適なデザイン設計</li>
            </ul>
          </div>

          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">💡 メリット</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>購買意欲促進・即決率向上：検討期間を短縮し、その場での購入決断を促す</li>
              <li>FOMO効果の最大化：「取り残される恐怖」を刺激し、機会損失への不安を解消</li>
              <li>離脱防止：タイマー表示によりページ滞在への動機付けを強化</li>
            </ul>
          </div>
        </div>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #f7fafc;">
          <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">🎯 活用シーン</h5>
          <div style="display: flex; flex-wrap: wrap; gap: 10px;">
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">期間限定セール</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">キャンペーンLP</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">イベント募集締切</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">先着特典</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">タイムセール</span>
          </div>
        </div>
      </div>

      <!-- アニメーションLP -->
      <div class="lp-type-card" style="background: white; border-radius: 20px; padding: 50px; margin-bottom: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
          <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">🎬</div>
          <div>
            <h4 style="margin: 0; font-size: 28px; color: #2d3748;">アニメーションLP</h4>
            <p style="margin: 5px 0 0 0; color: #667eea; font-weight: bold;">動きのある表現でブランド体験を最大化し、記憶に残るLPへ</p>
          </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">✨ 特徴</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>動きのあるビジュアル表現：スクロールに合わせて要素が動く没入体験</li>
              <li>インタラクティブ体験：ユーザーの操作に反応し、能動的な閲覧を促進</li>
              <li>ブランド体験の演出：静止画では伝わらない「世界観」や「空気感」を表現</li>
            </ul>
          </div>

          <div>
            <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">💡 メリット</h5>
            <ul style="color: #4a5568; line-height: 1.8;">
              <li>視覚的インパクト大：競合他社との差別化を図り、強い印象を残す</li>
              <li>滞在時間向上：飽きさせない演出で離脱を防ぎ、精読率を高める</li>
              <li>記憶に残る印象：感情を動かす演出で、認知拡大とブランド好意度を向上</li>
            </ul>
          </div>
        </div>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #f7fafc;">
          <h5 style="color: #667eea; font-size: 18px; margin-bottom: 15px;">🎯 活用シーン</h5>
          <div style="display: flex; flex-wrap: wrap; gap: 10px;">
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">ブランドサイト</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">プロダクト紹介</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">イベントLP</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">採用サイト</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">コーポレートサイト</span>
            <span style="background: #f7fafc; color: #4a5568; padding: 8px 16px; border-radius: 20px; font-size: 14px;">新商品ティザー</span>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 50px; padding: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px; color: white;">
        <p style="font-size: 18px; margin: 0; line-height: 1.8;">
          <strong>全てのLPに付帯：</strong>レスポンシブデザイン対応・SEO基本設定・アクセス解析設定・テキスト修正1ヶ月無料
        </p>
      </div>
    </section>

<section class="zisseki">
    <h3>制作実績・成果事例</h3>
<div class="infinity-feature-row">
  <div class="infinity-feature-text">
    <b>500件以上</b>のWebサイト構築実績。<br>
    医療・施工業など専門性の高い業種も多数。
  </div>
  <div class="infinity-feature-lottie">
    <dotlottie-wc 
      src="https://lottie.host/f56e0c58-28b8-46d8-9412-b7cb6f0e1e52/42fD9PexxW.lottie" 
      style="width: 300px; height: 300px" 
      speed="1" autoplay loop>
    </dotlottie-wc>
  </div>
</div>

      <ul class="infinity-list">
<div class="works-grid">
<?php
$args = array(
  'post_type' => 'works',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'work_category',
      'field'    => 'slug',
      'terms'    => 'lpcreative'
    ),
  ),
);

$hp_works_query = new WP_Query($args);
$count = 0;

if ($hp_works_query->have_posts()) :
  while ($hp_works_query->have_posts()) : $hp_works_query->the_post();
    $custom_image = get_field('works_image');
    $image_url = is_array($custom_image) ? $custom_image['sizes']['medium'] : $custom_image;
    $count++;
    ?>
    <div class="works-item<?php echo ($count > 3) ? ' hidden' : ''; ?>">
      <div class="works-image">
        <?php if ($image_url) : ?>
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>">
          </a>
        <?php endif; ?>
      </div>
      <div class="works-content">
        <h4 class="works-title"><?php the_title(); ?></h4>
        <div class="works-link">
          <a href="<?php the_permalink(); ?>">詳しく見る</a>
        </div>
      </div>
    </div>
    <?php
  endwhile;
  wp_reset_postdata();
else :
  echo '<p>「LP制作」カテゴリの制作実績はまだありません。</p>';
endif;
?>
</div>

<?php if ($count > 3) : ?>
  <div class="works-more-wrap">
    <button class="works-more-btn">もっと見る</button>
  </div>
<?php endif; ?>

		</ul>

		</section>

<section class="infinity-flow-section">
  <h3 class="infinity-flow-heading">
    納品までの流れ <span class="infinity-badge">プロジェクト進行</span>
  </h3>
  <div class="infinity-flow">
    <!-- 各STEPカード -->
    <div class="infinity-flow-step">
      <dotlottie-wc src="https://lottie.host/7ba99a35-9b1c-4722-a58b-c99bae2c700e/3rNQkNN5hH.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>
      <strong>1. ヒアリング・戦略立案</strong>
      <p>課題・目標をSTICCで整理し戦略立案（1〜2週間）</p>
    </div>
    <div class="infinity-flow-step">
      <dotlottie-wc src="https://lottie.host/ebd155ff-55c4-41fd-8abe-7c9d219dc887/atJFFnF5NM.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>
      <strong>2. 企画・設計</strong>
      <p>サイト構造・コンテンツ企画（1〜2週間）</p>
    </div>
    <div class="infinity-flow-step">
      <dotlottie-wc src="https://lottie.host/a8f93ab4-f517-4e6b-8b17-ca8bb0f3d5a1/BxYdApcpws.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>
      <strong>3. デザイン制作</strong>
      <p>ブランドに合わせたデザイン（2〜3週間）</p>
    </div>
    <div class="infinity-flow-step">
      <dotlottie-wc src="https://lottie.host/5d2d9eff-142b-4668-89af-6b521bead4dc/sKeHL1CgTq.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>
      <strong>4. コーディング・実装</strong>
      <p>高品質コーディング・SEO内部対策（2〜4週間）</p>
    </div>
    <div class="infinity-flow-step">
      <dotlottie-wc src="https://lottie.host/63cdeb5c-6825-44e8-aba6-fcf1cd03db60/NOhN2fBPLd.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>
      <strong>5. テスト・調整</strong>
      <p>動作確認・最終調整（1〜2週間）</p>
    </div>
    <div class="infinity-flow-step">
      <dotlottie-wc src="https://lottie.host/00a62431-4afb-465d-81f0-0b2ddb013c95/OZC58GKVSt.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>
      <strong>6. リリース・運用開始</strong>
      <p>公開・運用開始（1週間〜）</p>
    </div>
  </div>
</section>

<section class="infinity-pricing-section">
  <h3 class="infinity-pricing-heading">料金プラン</h3>
  <div class="infinity-pricing-table">
    <!-- プラン：スタンダード -->
    <div class="pricing-column">
      <dotlottie-wc src="https://lottie.host/e6bd22ca-6ab6-4d5f-b605-eca501589e23/sbpQdIiyvf.lottie"
        class="pricing-lottie" speed="1" autoplay loop></dotlottie-wc>
      <div class="pricing-title">スタンダードプラン</div>
      <div class="pricing-price">¥150,000〜</div>
      <div class="pricing-summary">
        通常のランディングページ<br>
      </div>
      <ul class="pricing-details">
		  <li>テキスト構築</li>
        <li>ヒアリング</li>
        <li>デザイン</li>
        <li>コーディング</li>
        <li>レスポンシブ対応</li>
        <li>対応言語：HTML / CSS / JS / PHP</li>
      </ul>
    </div>

    <!-- プラン:ビジネス -->
    <div class="pricing-column featured">
      <dotlottie-wc src="https://lottie.host/390728e9-a233-4ecc-8987-305916b3780c/Ucj6NCDgBF.lottie"
        class="pricing-lottie" speed="1" autoplay loop></dotlottie-wc>
      <div class="pricing-title">ビジネスプラン</div>
      <div class="pricing-price">¥250,000〜</div>
      <div class="pricing-summary">
        デザイン性重視/決済サービス連携/編集機能</div>
      <ul class="pricing-details">
        <li>テキスト構築</li>
        <li>ヒアリング</li>
        <li>デザイン</li>
        <li>コーディング</li>
        <li>レスポンシブ対応</li>
        <li>管理画面開発 / API連携</li>
        <li>対応言語：HTML / CSS / JS / PHP / React / Node / TS</li>
      </ul>
    </div>

    <!-- プラン：プレミアム -->
    <div class="pricing-column">
      <dotlottie-wc src="https://lottie.host/10172254-c7c5-4a0e-9b72-9e68e5ca6dc7/mlVzVLiRVB.lottie"
        class="pricing-lottie" speed="1" autoplay loop></dotlottie-wc>
      <div class="pricing-title">プレミアムプラン</div>
      <div class="pricing-price">¥450,000〜</div>
      <div class="pricing-summary">
        フルオーダーメイド / Webアプリ / 決済・会員・AI連携 / 専任サポート
      </div>
      <ul class="pricing-details">
        <li>テキスト構築 / ヒアリング</li>
        <li>デザイン / コーディング</li>
        <li>レスポンシブ対応 / 管理画面開発</li>
        <li>API連携 / EC / 会員制 / 決済 / 機能開発</li>
        <li>対応言語：HTML / CSS / JS / PHP / React / Node / TS / その他</li>
      </ul>
    </div>
  </div>
  <div class="pricing-note">
    ※上記価格は税抜。内容により変動します。詳細はお気軽にご相談ください。
  </div>
</section>

	<?php get_footer(); ?>
