<?php
require_once 'contact.php';
#var_dump($arr);
$arr = Contact::select();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>  
<body class="font-sans bg-gray-50">
    <div>
        <div class="sidebar fixed top-0 bottom-0 lg:left-0 w-[170px] overflow-y-auto text-center p-1 bg-slate-300">
            <div class=" text-gray-100 text-xl mt-5 ml-2">
                <div class="mt-1 ml-2 mb-5 flex items-center  text-slate-950 ">
                    <i class="fa-solid fa-paragraph"></i>
                    <h1 class="font-bold text-[15px] ml-2 text-slate-600">PWEB PR</h1>
                </div>
                <div class="p-3.5 h-19.9 mt-6 flex items-center rounded-xl px-4 py-2 bg-slate-300 hover:bg-slate-400 text-white w-[30rem]">
                    <i class="fa-solid fa-house"></i>
                    <span class="text-white font-medium text-[13px] ml-4">Home</span>
                </div>
                <div class="p-3.5 h-19.9 mt-3 flex items-center rounded-xl px-4 py-2 bg-slate-300 hover:bg-slate-400 text-white w-[30rem]">
                    <i class="fa-solid fa-circle-user"></i>
                    <span class="text-white font-medium text-[13px] ml-4">Akun</span>
                </div>
                <div class="p-3.5 h-19.9 mt-3 flex items-center rounded-xl px-4 py-2 bg-slate-300 hover:bg-slate-400 text-white w-[30rem]">
                    <i class="fa-solid fa-gear"></i>
                    <span class="text-white font-medium text-[13px] ml-4">Pengaturan</span>
                </div>
                <hr class="my-4 text-slate-500"> 
                <div >
                    <a href="./login.html" class="p-3.5 h-19.9 mt-3 flex items-center rounded-xl px-4 py-2 bg-slate-300 hover:bg-slate-400 text-white w-[20rem]">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="text-white font-medium text-[13px] ml-4">Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-[1.7rem] ml-[10rem]">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-6 lg:mx-10 mt-5">
                    <div class="flex ml-10">
                        <button class="mt-4 -mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                        Tambah
                        </button>
                    </div>
                <div class="inline-block min-w-full py-2 overflow-hidden sm:rounded-lg">
                    <table class="py-20 mt-2 pl-[15.75rem] min-w-full leading-normal">
                        <thead class="items-center justify-center bold">
                            <tr>
                                <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    ID
                                </th>
                                <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Nomor HP
                                </th>
                                <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Owner
                                </th>
                                <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-bold text-gray-600 uppercase tracking-wider items-center justify-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center items-center justify-center">
                            <?php
                                for ($i = 0; $i < count($arr['id']); $i++) {
                            ?>
                                <tr >
                                    <td class="px-4 py-2 border-b border-gray-200 bg-white text-sm">
                                        <?= $arr['id'][$i] ?>
                                    </td>
                                    <td class="px-4 py-2 border-b border-gray-200 bg-white text-sm">
                                        <?= $arr['no_hp'][$i] ?>
                                    </td>
                                    <td class="px-4 py-2 border-b border-gray-200 bg-white text-sm">
                                        <?= $arr['owner'][$i] ?>
                                    </td>
                                    <td class="px-4 py-2 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex justify-center">
                                            <button class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                            </button>
                                            <button class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
