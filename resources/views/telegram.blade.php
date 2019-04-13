@extends('layouts.home')
@section('title','Telegram')
@section('content')
    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">

                <div class="col-md-12 p-b-30">
                    <form class="leave-comment" method="POST" action="/telegram">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Masukkan ID Telegram Anda
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="id_telegram"
                                   placeholder="ID Telegram">
                        </div>

                        <div class="w-size25">
                            <!-- Button -->
                            <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                Send
                            </button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
