<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CaptainVR - Home</title>
</head>
<body>
    <!-- <div class="flex w-full h-72 bg-gradient-to-r from-cyan-400 to-indigo-500">
        <div class="flex justify-center w-1/2 skew-x-6 h-72 bg-gradient-to-r from-indigo-500 to-cyan-400">
            <div class="flex justify-end mr-48">
                <div class="flex-col mt-8 -skew-x-6">
                    <h1 class="font-bold text-3xl text-white">Welcome to the VR-Coaches<br />platform</h1>
                    <p class="text-m text-gray-300 w-80">The VR Coaches platform is a platform where VR/ XR/Metaverse coaches, trainers, therapists, and consultants come together and join forces to create a better real world for everyone.</p>
                </div>
            </div>
        </div>
    </div> -->
    <div class="flex flex-row">
        <div class="w-full z-0 h-72 bg-gradient-to-r from-indigo-500 to-cyan-400 absolute">
            <div class="flex justify-end mr-48">
                <div class="flex-col mt-8 -skew-x-6">
                    <h1 class="font-bold text-3xl text-white">Welcome to the VR-Coaches<br />platform</h1>
                    <p class="text-m text-gray-300 w-80">The VR Coaches platform is a platform where VR/ XR/Metaverse coaches, trainers, therapists, and consultants come together and join forces to create a better real world for everyone.</p>
                </div>
            </div>
        </div>
        <div class=" w-1/2 z-10 -skew-x-6 h-72 bg-gradient-to-r from-indigo-500 to-cyan-400 relative">
            <div class="flex flex-row">
                <img src="{{ asset('images/pinkgradient-vrheadset.jpg') }}" class="h-56 w-56 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-56 mt-36 z-0">
                <img src="{{ asset('images/purplegradient-vrheadset.jpg') }}" class="h-24 w-24 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-76 mt-16 z-10">
            </div>
        </div>
    </div>
</body>
</html>
