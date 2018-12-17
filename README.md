# MyVendor.MyProject

Resourceにカスタムスキームを追加するデモプロジェクト

詳細はこちら

[BEAR.SundayのResourceにカスタムスキームを追加する方法](https://qiita.com/gamu1012/items/7b26422901ca1535bf93)

## 概要

### オリジナルSchemeCollectionProviderを実装
`/src/Provider/MySchemeCollectionProvider.php` を追加

### 実装したMySchemeCollectionProviderをSchemeCollectionInterfaceに束縛する
`/src/Module/AppModule.php` に下記を追加

```diff
protected function configure() {
        $appDir = $this->appMeta->appDir;
        require_once $appDir . '/env.php';

+       $this->bind(SchemeCollectionInterface::class)->toProvider(MySchemeCollectionProvider::class);

        $this->install(new PackageModule);
}
```

---

## Installation

    composer install
    composer setup

## Usage

### Run server

    composer serve

### QA

    composer test     // run unit test
    composer tests    // run test and quality checks
    composer coverage // test coverage
    composer cs-fix   // fix the coding standard

