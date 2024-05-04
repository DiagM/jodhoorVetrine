<!DOCTYPE html>
<html>
<head>
    <title>Language Selector</title>
    <style>
        /* Dropdown Button */
        .dropbtn {
            background-color: transparent;
            color: #333; /* Adjust color as needed */
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the Dropdown */
        .dropdown-content a {
            color: #333; /* Adjust color as needed */
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Style the dropdown button on hover */
        .dropdown:hover .dropbtn {
            background-color: #ddd;
        }

        /* Highlight current locale */
        .highlight {
            background-color: #a6d8f9; /* Light blue color */
        }
    </style>
</head>
<body>

<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <div class="dropdown">
        <button class="dropbtn">{{ __('English') }}</button>
        <div class="dropdown-content">
            @foreach($available_locales as $locale_name => $available_locale)
                <a href="language/{{ $available_locale }}" @if($available_locale === $current_locale) class="highlight" @endif>{{ $locale_name }}</a>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
