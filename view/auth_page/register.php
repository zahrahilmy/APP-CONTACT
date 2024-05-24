<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <main class="flex justify-center items-center w-full min-h-screen  bg-slate-400 text-gray-800 mx-auto">
        <div class="w-96 p-10 shadow-xl bg-white rounded-xl ">
            <div class="flex items-center justify-center mb-5">
                <span class="bg-slate-600 py-2 pb-2 text-xl px-3 rounded-bl-xl block text-center text-white font-semibold ">Daftar</span>
                <span class="border-4  border-slate-600 py-[4px] text-xl font-semibold rounded-tr-xl px-3">Akun</span>
            </div>
            <div class="pt-1 pb-2">
                <div class="mt-1 ">
                    <label for="username" class="block text-base mb-1">Username</label>
                    <input type="text" id="username" class="border w-full text-balance px-2 py-1 focus:outline-none focus:ring-0 focus: border-gray-400 rounded-md bg-opacity-20" placeholder="Masukkan username">
                </div>
                <div class="mt-1 ">
                    <label for="email" class="block text-base mb-1">Email</label>
                    <input type="email" id="email" class="border w-full text-balance px-2 py-1 focus:outline-none focus:ring-0 focus: border-gray-400 rounded-md bg-opacity-20" placeholder="Masukkan email">
                </div>
                <div class="mt-1">
                    <label for="password" class="block text-base mb-1">Password</label>
                    <input type="password" id="password" class="border w-full text-balance px-2 py-1 focus:outline-none focus:ring-0 focus: border-gray-400 rounded-md bg-opacity-20" placeholder="Masukkan password">
                </div>
                <div class="mt-1">
                    <label for="confirmpassword" class="block text-base mb-1">Konfirmasi Password</label>
                    <input type="password" id="confirmpassword" class="border w-full text-balance px-2 py-1 focus:outline-none focus:ring-0 focus: border-gray-400 rounded-md bg-opacity-20" placeholder="Masukkan ulang password">
                </div>
                <p class="mt-5 flex justify-center items-center text-xs">
                    Telah memiliki akun?  
                    <a href="./login.html" class="text-blue-400 font-normal hover:underline underline-offset-4 hover:text-blue-500">Masuk</a>
                </p>
            </div>
            <div class="mt-0">
                <button type="submit" class="mt-3 border-2 border-gray-500 bg-gray-500 text-white rounded-lg py-1 w-full hover:bg-slate-600 hover:border-slate-600 font-medium">Daftar Akun</button>
            </div>
        </div>
    </main>
</body>
</html>