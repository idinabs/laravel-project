<!Doctype html>
<html lang="en">

<head>
    @include('layouts.head-html')
</head>

<body>

    @include('.loader')

    @include('.navbar')
   
    @include('.hero')
    
    @include('.services')
    <!-- Services End -->
    
    @include('.featured-portfolio1')
    <!-- Recent Posts Start -->
   
    @include('.recent-post')
    <!-- Recent Posts End -->
    <!-- Trust Start -->
    @include('.featured-portfolio2')
    <!-- Pricing End -->

    <!-- Testimonial and Clients Start -->
    @include('.testimonial')
   
    @include('.footer')
    <!-- Footer Endt -->

    <!--jQuery-->
    @include('layouts.js')
</body>

</html>