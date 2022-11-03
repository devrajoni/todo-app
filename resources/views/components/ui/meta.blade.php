    @props([
        'title' => __('Organize your work and life, finally.'),
        'description' => __('Become focused, organized, and calm with :name. The world’s #1 task manager and to-do list app.',['name'=> config('app.name')]),
        'image' => asset('assets/images/logo.png'),
    ])
    
    <meta name="title" content="{{ $title }}" />
    <meta name="description" content="{{ $description }}" />

    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ $image }}" />
    
    <meta name="twitter:card" content="{{ $image }}"/>
    <meta name="twitter:title" content="{{ $title }}"/>
    <meta name="twitter:description" content="{{ $description }}"/>
    <meta name="twitter:image" content="{{ $image }}"/>