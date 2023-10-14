@extends('admin.blanklayout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<div class="flex flex-col items-center justify-center">
    
                <br/><br/>
                    <h2 class="font-baloo text-[58px] text-center font-bold">Admin</h2>
                    <form method="post" action="adminlogin.php" class="p-8 flex text-left flex-col items-center space-y-8 w-full">
                        <div class="w-full flex flex-col max-w-[40rem]">
                        <label class="font-dm text-[24px] text-left">Admin Username:</label>
                        
                        <input type="text" name="email" class="pl-[10px] text-[24px] w-full  h-[68px] rounded-[20px]  border-[4px]" required>
                        </div>
                        <div class="mb-12 w-full flex flex-col max-w-[40rem]">
                        <label class="font-dm text-[24px] text-left">Admin Password:</label>
                        
                        <input type="password" name="password" class="pl-[10px] text-[24px] w-full h-[68px] rounded-[20px]  border-[4px]" required>
                        </div>
                        <div>
                        <x-button class="mt-12" styletype="secondary">Login</x-button>
                        </div>
                      
                    </form>
                </div>
        </div>
</body>
@endsection