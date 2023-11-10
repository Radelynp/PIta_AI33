<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('You can Registration Here!') }}
        </h2>
    </x-slot>
    <div class="container" style="background-color: lightblue;">
        <h2>Registration Form</h2>
        <form id="registrationForm" method="POST">
            <label for="firstName">Complete Name</label>
            <input type="text" id="firstName" name="firstName" autocomplete="off" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="off" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="off" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" autocomplete="off" required>
            
            <div class="center-button">
                <input type="submit" value="Register" style="background-color: black; color: white;">
            </div>
        </form>
    </div>

    <style>
        .container {
            text-align: center;
            padding: 20px;
        }
        
        h2 {
            font-size: 24px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 20%;
            padding: 10px;
            margin-top: 5px;
        }

        .center-button {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</x-app-layout>
