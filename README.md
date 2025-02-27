# Philize - フィリピン留学情報プラットフォーム

## 🚀 プロジェクト概要
**Philize** は、フィリピン留学を検討している人や、現在留学中の人向けの総合情報プラットフォームです。

> "Philippines" + "Rise" ＝ フィリピンで学び、成長し、自分を高める

### **🎯 目的**
- フィリピン留学に関する **正確で実用的な情報** を提供
- **留学生同士が交流できる場** を提供し、不安や疑問を解消
- 語学だけでなく、異文化交流・キャリアアップのチャンスを広げる

## 📌 機能一覧
✅ **留学生活情報**（物価・気候・治安・SIM・交通・食事など）  
✅ **掲示板 & Q&A**（留学生同士の質問・交流）  
✅ **サイトメンテナンス & お知らせ**  
✅ **お問い合わせフォーム**（サイト管理者への問い合わせ）  
✅ **ホームページ**（サイトの概要・主要コンテンツへのリンク）

## 🛠 使用技術
### **バックエンド**
- Laravel 11 (PHP 8.2)
- MySQL

### **フロントエンド**
- Bootstrap 5 + カスタムCSS
- JavaScript (最低限)

### **その他**
- Laravel UI (ユーザー認証)
- gmailへのお問い合わせメール送信

## 💻 環境構築手順
1. **リポジトリをクローン**
   ```sh
   git clone https://github.com/your-username/philize.git
   cd philize
   ```
2. **依存パッケージをインストール**
   ```sh
   composer install
   npm install
   ```
3. **環境変数を設定**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. **データベースを設定 & マイグレーション実行**
   ```sh
   php artisan migrate
   ```
5. **サーバーを起動**
   ```sh
   php artisan serve
   ```

## 🔥 今後の開発予定
- **UIの改善**（モバイル対応・デザイン調整）
- **機能追加**（イベント情報の共有、留学経験者のインタビュー記事）
- **SEO対策**（検索エンジン最適化）

## 📩 お問い合わせ
開発者: **Kenta**  
GitHub: [Kenta2360](https://github.com/Kenta2360) 
Email:  k.nojiri0514@gmail.com  

---
**© 2025 Philize. All rights reserved.**
