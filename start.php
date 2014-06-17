﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/pygment_trac.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/print.css" media="print" />

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title>Ringo</title>
  </head>

  <body>
    <header>
      <div class="inner_top">
        <h1>Ringo </h1>

        <a href="https://github.com/dkwzjw/ringo" target="_blank" class="button"><small>View project on</small>GitHub</a>		</div>
    </header>

    <div id="content-wrapper">
      <div class="inner_main clearfix">
        <section id="main-content">
		<?php include("side_menu.html"); ?>
		  <div id="rogo">
		    <h2 align="center">- Ringo <font color="red">♥</font>- </h2>
		    <p align="center"><img src="images/ringo-128.png" alt="ringo" width="128" height="128"></p>
	      </div>
		  <p class="concept"><br>
		    <br>
		    <br>
		  </p>
		  <h3>&nbsp;</h3>
		  <h3>Ringoを始めよう！</h3>
		  <h3>はじめに</h3>
          <p>トップページ又は右の方にあるリンク先からウォレットをダウンロードします。<br>7-zipで圧縮してあるので対応した解凍ソフトで解凍してください。<br>
          <br>解凍ができたら起動します。<br>
          <br>
          <img src="images/start1.png" alt="start1" width="608" height="417"><br>
          <br>
          ringo-qt.exeを立ち上げるとウォレットの同期が始まります。<br>そのまましばらくお待ちください。<br>
          <br>
          「コインを受け取る」のタブをクリックするとあなたのRingoのアドレスが表示されます。<br>
          <br>
          <img src="images/start2.png" alt="start2" width="608" height="417">
          <p>アドレスは右クリックでコピー出来ます。
          <h3>Ringoの入手方法</h3>
          <p>RingoはPoWによるマイニングは終了しました。<br>
          現在の入手方法は</p>
          <p><strong>1) PoS採掘により入手する</strong></p>
          <p>Ringoはウォレットに残高があるとPoS採掘が始まり、成功するとRINが入手できます。<br>
          条件は<br>
            <br>
          1 .1RIN以上保有していること<br>
          2. ウォレットに入ってから6時間以上経過<br>
          3. ウォレットに入ってから360ブロック以上経過<br>
          4. weightが1以上<br>
            <br>
          PoS採掘が始まると右下の矢印のアイコンが緑色になります。<br>
          残高が多いほど、待っている期間が長いほどweightが増え、PoS採掘に成功しやすくなります。</p>
          <p><strong>2) 誰かから貰う</strong><br>
            <br>
          2ch.netのソフトウェア板のRingoスレでアドレスを貼ると誰かからもらえるかもしれません。<br>
            <br>
            <strong>3) faucetという無料で寄付をしているサイトから入手する</strong></p>
          <p><a href="http://www.sighash.info/" target="_blank">.sighash.info</a>さんがfaucetに対応してくれました。<br>
            少額ですが、RINが入手できます。<br>
            Loginし、「Get from faucet」または「蛇口をひねる」をすればRINが得られます。<br>
            faucetは寄付によって維持されてるので、<br>
          余裕のある方からの寄付があれば多くの人がRINを入手できます。</p>
          <p><strong>4) 他の通貨とトレードする</strong></p>
          <p>Ringoは他の通貨とトレードして入手できます。<br>
            <a href="https://www.allcoin.com/trade/rin_btc" target="_blank">allcoin.com</a><br>
              <a href="https://monatr.jp/?lang=en" target="_blank">monatr.jp</a><br>
              <a href="https://www.coinader.com/?cur=RIN&ccur=BTC" target="_blank">coinader.com</a><br>
          が現在Ringoに対応している取引所になります。</p>
          <h3>Ringoの送金方法</h3>
          <p>Ringoの送金は通常のコインと同じように出来ますが、<br>
            送金すると送金に選ばれたTransactionのweightが初期化されます。<br>
          weightが減るとPoS採掘成功までにかかる時間に影響が出ます。</p>
          <p>            ちょっとややこしいですが、コインコントロールの機能を使うとweight減少を抑えることが出来ます。<br>
            この機能は中級者向けです。</p>
          <p>設定→オプション→表示でコインコントロールを表示させるようにします。</p>
          <p><img src="images/coinc1.png" alt="coinc1" width="391" height="298"></p>
          <p>続いて、「コインを送る」タブのコインコントロールの「入力」をクリック、リストモードを選びます。</p>
          <p><img src="images/coinc2.png" alt="coinc2" width="713" height="382"></p>
          <p>「総額」と「承認済みの数」が少ない行にチェックを入れます。</p>
          <p><img src="images/coinc3.png" alt="coinc3" width="621" height="417"></p>
          <p>送り先にアドレスと金額を入れ、送るをクリックすると送金が完了します。(選んだ「総額」より多くは送れません)<br>
          チェックを入れたTransactionの承認済みの数が0になりますが、他のTransactionには影響ないので<br>
          weight減少を抑えることが出来ます。</p>
          <p>&nbsp;</p>
          <p><strong>本サイト及びプログラムを利用することで発生したいかなる損失・損害に対しその責任を負いません </strong></p>
		    </li>
	      </ul>
	    </section>
      </div>
    </div>

  
  </body>
</html>