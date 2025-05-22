@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="contact-table">
            <table class="contact-table__inner">
                <tr class="contact-table__row">
                    <th class="contact-table__header">お名前</th>
                    <th class="contact-table--required">※</th>
                    <td class="contact-table__text">
                        <input class="contact-table__text-input" type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                        <input class="contact-table__text-input" type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <div class="error">
                            <div class="form__error">
                                @error('last_name')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form__error">
                                @error('first_name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">性別</th>
                    <th class="contact-table--required">※</th>
                    <td class="contact-table__text">
                        <input class="contact-table__radio-input" type="radio" name="gender" value="男性" {{ old('gender','男性') == '男性' ? 'checked' : '' }} checked />男性
                        <input class="contact-table__radio-input" type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }} />女性
                        <input class="contact-table__radio-input" type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }} />その他
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">メールアドレス</th>
                    <th class="contact-table--required">※</th>
                    <td class="contact-table__text">
                        <input class="contact-table__email-input" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">電話番号</th>
                    <th class="contact-table--required">※</th>
                    <td class="contact-table__text">
                        <input class="contact-table__tel-input" type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" />
                        <span>-</span>
                        <input class="contact-table__tel-input" type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />
                        <span>-</span>
                        <input class="contact-table__tel-input" type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <div class="form__error">
                            @error('tel')
                            {{ $message }}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">住所</th>
                    <th class="contact-table--required">※</th>
                    <td class="contact-table__text">
                        <input class="contact-table__address-input" type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">建物名</th>
                    <th></th>
                    <td class="contact-table__text">
                        <input class="contact-table__building-input" type="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">お問い合わせの種類</th>
                    <th class="contact-table--required">※</th>
                    <td class="contact-table__text">
                        <select class="search-form__item-select" name="category_id">
                            <option value="">選択してください</option>
                            @foreach($categories as $category)
                            <option value="{{ $category['id'] }}" @if(old('category_id') == $category->id) selected @endif>{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <div class="form__error">
                            @error('category_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">お問い合わせ内容</th>
                    <th class="contact-table--required">※</th>
                    <td class="contact-table__text">
                        <textarea class="contact-table__textarea-input" name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <div class="form__error">
                            @error('detail')
                            {{ $message }}
                            @enderror
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection