# Step2

もう一度TODOリストを復習

- [ ] $5 + 10CHF = $10 (レートが2:1の時)  
- [ ] $5 * 2 = $10  
- [ ] Dollarクラスを持つDollar.phpの存在
- [ ] Dollarクラスにamountというプロパティ
- [ ] Dollarクラスにtimesというメソッド


**テスト駆動開発において、細かくステップを踏むのが大事**

```
vendor/bin/phpunit MoneyTest.php
```

を実行した時にまずDoller.phpが存在しないことを怒られるので、上のチェックリストを考えつつDoller.phpを作る  


```
vendor/bin/phpunit MoneyTest.php
```

を実行すると、エラーではなくテストの失敗に変わっている 
 
こういう細かいステップを踏んでいく
