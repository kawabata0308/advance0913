<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/index1.css') }}" />
</head>
<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h1>お問い合わせ</h1>
            </div>
        <form class="form" action="/confirm" method='post'>
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="family-name" placeholder="例）山田"
                        value="{{ old('family-name') }}"  class="form__input--text-family"/>
                        <input type="text" name="given-name"  placeholder="例）太郎"
                        value="{{ old('given-name') }}" class="form__input--text-given"/>
                    </div>
                    <div class="form__error">
                        @error('family-name')
                        {{ $message }}
                        @enderror
                         @error('given-name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                    <div class="form__label--gender">
                    <input type="radio" name="gender" value="male" checked="checked">男性
                    <input type="radio" name="gender" value="female">女性
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__group--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例)test@example.com"
                        value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">郵便番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    
                    <div class="form__input--text">
                        <div class="form__input--label">
                        <label for="postcode">&#12306;</label>
                        <input type="postcode"
                        name="postcode" placeholder="例)123-4567"
                        value="{{ old('postcode') }}" />
</div>
                    </div>
                    <div class="form__error">
                @error('postcode')
                        {{ $message }}
                        @enderror
            </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="prefecture_id" name="prefecture_id" placeholder="例)東京都渋谷区千駄ヶ谷1-2-3"
                        value="{{ old('prefecture_id') }}" />
                    </div>
                    <div class="form__error">
                         @error('prefecture_id')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="building" name="building" placeholder="例）千駄ヶ谷マンション101"value="{{ old('building') }}" />
                    </div>
                    <div class="form__error">
                         @error('building')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">ご意見</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="content" name="content"
                        value="{{ old('content') }}"/>
                    </div>
                    <div class="form__error">
                         @error('content')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認</button>
            </div>
        </form>
    </main>
</body>
</html>



