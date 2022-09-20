<x-app-layout>
    

    <div style="background-color: grey"> 

        <h1>Admin Dashboard</h1>
    </div>

    <div style="padding:15px;">

        <form action="{{url('/addseller')}}" method="POST">
            @csrf

            <div style="padding:25px;">
                    <label>Name</label>
                    <input type="text" name="name" required=""><br>
            </div>

            <div style="padding:25px;">
                    <label>Email</label>
                    <input type="email" name="email" required=""><br>
            </div>

            <div style="padding:15px;">
                    <label>Password</label>
                    <input type="password" name="password" required=""><br><br>
            </div>

            <div style="padding:15px;">
                <button class="btn btn-success" type="submit">Submit</button>

            </div>
        </form>
    </div>
</x-app-layout>

