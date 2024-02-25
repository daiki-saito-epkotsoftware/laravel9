<x-app>
    <x-slot name="title">
        月報
    </x-slot>

    <h1 class="text-2xl">web日報登録</h1>

    <form class="border rounded bg-white form-time-table" action="{{ url('/index')}}">
        {{ csrf_field() }}
        <h1 class="my-3">月別リスト</h1>

        <select class="form-select" aria-label="Default select example">

            <option selected>Open this select menu</option>
            <option value="1">2024/3</option>
        </select>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">日</th>
                    <th scope="col">出勤</th>
                    <th scope="col">退勤</th>
                    <th scope="col">休憩</th>
                    <th scope="col">業務内容</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1（金）</th>
                    <td>09:00</td>
                    <td>18:00</td>
                    <td>01:00</td>
                    <td>テストテストテストテストテストテスト</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            日報登録
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="alert alert-primary" role="alert">
  日付:2024年3月1日
</div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="出勤"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">打刻</span>
                                            </div>
                                </div>
                                <div class="col">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="退勤"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">打刻</span>
                                            </div>
                                </div>
                                <div class="col">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="休憩"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                </div>
                            </div>
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">備考</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">登録</button>
                    </div>
                </div>
            </div>
        </div>
</x-app>