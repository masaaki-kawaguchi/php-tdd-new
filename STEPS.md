# Step7

最短のステップでテストを通すため、Dollar.phpをコピーしてそれを元にFranc.phpというFrancクラスを持つファイルを作成する。
しかし、内容を見るとDollar.phpとFranc.phpは重複していると謂え、これを取り除かなければならない。


TODOリストは、
- [ ] $5 + 10CHF = $10 (レートが2:1の時)  
- [x] $5 * 2 = $10  
- [x] Dollarクラスを持つDollar.phpの存在
- [x] Dollarクラスにamountというプロパティ
- [x] Dollarクラスにtimesというメソッド
- [x] Dollarクラスのamountはprivateにしたい
- [x] 4CHF * 3 = 12CHF
- [x] Francクラスを持つFranc.phpの存在
- [x] Francクラスにamountというプロパティ
- [x] Francクラスにtimesというメソッド
- [x] Francクラスのamountはprivateにしたい
- [ ] Moneyクラスという親クラスを作成し、DollarクラスとFrancクラスはそれぞれ継承する
