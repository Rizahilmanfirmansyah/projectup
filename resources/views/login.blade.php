

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40rem;">
            <div class="card-body">
                <form action="{{route('aksilogin')}}" method="post">
                    <div class="form-group">
                        <label for="">USERNAME</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>