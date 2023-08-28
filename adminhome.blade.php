@extends('layouts.adminlayout')
@section('content')
    <h1 class = 'font-bold text-3xl'>Account</h1>
    <form action="" method = "post">
    @csrf
    <section id="visits">
            <h2>User Visits</h2>
        </section>
        
        <section id="settings">
            <h1 class = 'font-bold text-xl'>General Settings</h2>
        </section>
    </main>
        <section id="Logo">
            <h2>Company Logo</h2>
        </section>
    <aside>
        <div id="logo">
            <img src="logo.png" alt="Sekarwangi Cake Logo">
        </div>
        <section id="Cover photo">
            <h2>Cover Photo</h2>
        </section>
        <div id="cover-photo">
            <img src="cover-photo.jpg" alt="Sekarwangi Cake Cover Photo">
        </div>
    </aside>
    <main>
        <section id="dashboard">
            <h2>Dashboard</h2>
            <!-- Dashboard content goes here -->
        </section>
        
        <section id="basic-info">
            <h2>Basic Information</h2>
            <form id="basic-info-form">
                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" name="companyName" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="location">Location:</label>
                <select id="location" name="location">
                    <option value="">Select Location</option>
                    <!-- Add country, city, and state options here -->
                </select>
                
                <button type="submit">Save Changes</button>
            </form>
        </section>
</body>
</html> 
    </form>
@endsection