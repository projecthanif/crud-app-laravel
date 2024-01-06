<x-layout>
    <section class="body three">
        <div class="body-right two">
            <h1 class="h1-text two">sign up.</h1>
            <p class="para">You already have an account?
                <a href="/login" class="a-link">Log in</a>
            </p>
        </div>
        <div class="body-left two">
            <div class="card two">
                <form action="/auth/signup" method="post" class="form">
                    @csrf
                    @method('post')
                    <label for="username">User Name</label>
                    <input type="text" name="name" id="" value="{{ old('name') }}">
                    @error('name')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" value="{{ old('email') }}">
                    @error('email')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                    <label for="password">Password</label>
                    <input type="password" name="password" id="">
                    @error('password')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                    <label for="c-password">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="">
                    @error('password')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                    <input type="submit" value="Register" class="form-btn">
                </form>
            </div>
        </div>
    </section>
</x-layout>
