<!DOCTYPE html>
<html>
<head>
    <title>phpete's TALL boilerplate</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>
<body>
    <div class="flex flex-col w-1/2 mx-auto mt-16" x-data="{ isOpen: false }">
        <button class="bg-gray-200 p-2" @click="isOpen = !isOpen">Test Alpine.js</button>
        <span class="text-center mt-4" x-show="isOpen">Alpine is working</span>
    </div>
    @livewireScripts
</body>
</html>