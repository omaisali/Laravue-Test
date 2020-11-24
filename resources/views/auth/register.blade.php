@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                
                                <select id="age" name="age" class="form-control">

                                    <option value="18">18 years</option>
                                    <option value="19">19 years</option>
                                    <option value="20">20 years</option>
                                    <option value="21">21 years</option>
                                    <option value="22">22 years</option>
                                    <option value="23">23 years</option>
                                    <option value="24" selected>24 years</option>
                                    <option value="25">25 years</option>
                                    <option value="26">26 years</option>
                                    <option value="27">27 years</option>
                                    <option value="28">28 years</option>
                                    <option value="29">29 years</option>
                                    <option value="30">30 years</option>
                                    <option value="31">31 years</option>
                                    <option value="32">32 years</option>
                                    <option value="33">33 years</option>
                                    <option value="34">34 years</option>
                                    <option value="35">35 years</option>
                                    <option value="36">36 years</option>
                                    <option value="37">37 years</option>
                                    <option value="38">38 years</option>
                                    <option value="39">39 years</option>
                                    <option value="40">40 years</option>
                                    <option value="41">41 years</option>
                                    <option value="42">42 years</option>
                                    <option value="43">43 years</option>
                                    <option value="44">44 years</option>
                                    <option value="45">45 years</option>
                                    <option value="46">46 years</option>
                                    <option value="47">47 years</option>
                                    <option value="48">48 years</option>
                                    <option value="49">49 years</option>
                                    <option value="50">50 years</option>
                                    <option value="51">51 years</option>
                                    <option value="52">52 years</option>
                                    <option value="53">53 years</option>
                                    <option value="54">54 years</option>
                                    <option value="55">55 years</option>
                                    <option value="56">56 years</option>
                                    <option value="57">57 years</option>
                                    <option value="58">58 years</option>
                                    <option value="59">59 years</option>
                                    <option value="60">60 years</option>
                                    <option value="61">61 years</option>
                                    <option value="62">62 years</option>
                                    <option value="63">63 years</option>
                                    <option value="64">64 years</option>
                                    <option value="65">65 years</option>
                                    <option value="66">66 years</option>
                                    <option value="67">67 years</option>
                                    <option value="68">68 years</option>
                                    <option value="69">69 years</option>
                                    <option value="70">70 years</option>
                                    <option value="71">71 years</option>
                                    <option value="72">72 years</option>
                                    <option value="73">73 years</option>
                                    <option value="74">74 years</option>
                                    <option value="75">75 years</option>
                                    <option value="76">76 years</option>
                                    <option value="77">77 years</option>
                                    <option value="78">78 years</option>
                                    <option value="79">79 years</option>
                                    <option value="80">80 years</option>
                                    <option value="81">81 years</option>
                                    <option value="82">82 years</option>
                                    <option value="83">83 years</option>
                                    <option value="84">84 years</option>
                                    <option value="85">85 years</option>
                                    <option value="86">86 years</option>
                                    <option value="87">87 years</option>
                                    <option value="88">88 years</option>
                                    <option value="89">89 years</option>
                                    <option value="90">90 years</option>
                                    <option value="91">91 years</option>
                                    <option value="92">92 years</option>
                                    <option value="93">93 years</option>
                                    <option value="94">94 years</option>
                                    <option value="95">95 years</option>
                                    <option value="96">96 years</option>
                                    <option value="97">97 years</option>
                                    <option value="98">98 years</option>
                                    <option value="99">99 years</option>
                                    <option value="100">100 years</option>
                                    <option value="101">101 years</option>
                                    <option value="102">102 years</option>
                                    <option value="103">103 years</option>
                                    <option value="104">104 years</option>
                                    <option value="105">105 years</option>
                                    <option value="106">106 years</option>
                                    <option value="107">107 years</option>
                                    <option value="108">108 years</option>
                                    <option value="109">109 years</option>
                                    <option value="110">110 years</option>
                                    <option value="111">111 years</option>
                                    <option value="112">112 years</option>
                                    <option value="113">113 years</option>
                                    <option value="114">114 years</option>
                                    <option value="115">115 years</option>
                                    <option value="116">116 years</option>
                                    <option value="117">117 years</option>
                                    <option value="118">118 years</option>
                                  </select>
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
