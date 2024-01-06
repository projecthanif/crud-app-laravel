<x-layout>
    <section class="body">
        <div class="body-right three">
            <h1 class="h1-text three">log in.</h1>
            <div class="card three">
                <form action="/login" method="post" class="form">
                    @csrf
                    @method('post')
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" value="{{ old('name') }}">
                    @error('email')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                    <label for="password" class="label three">Password</label>
                    <input type="password" name="password" id="">
                    @error('password')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                    <a href="#" class="a-link three">Forget password?</a>
                    <input type="submit" value="SIGN IN" class="form-btn three">
                </form>
            </div>
        </div>
        <div class="body-left"></div>
    </section>
</x-layout>
