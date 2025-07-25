<?php include 'includes/header.php'; ?>
<main>
    <section class="main1">
        <h1>Welcome to MediNet</h1>
        

    </section>
    <section class="services-section">
    <div class="services-container">
        <h2>Our Services</h2>
        <p class="services-description">
            This Dispensary Management System streamlines healthcare services by enabling real-time doctor booking 
            and efficient patient management across multiple dispensaries. Users can register, book available doctors, 
            and track their waiting time in real time. Doctors can manage their appointments, issue digital prescriptions, 
            and ensure seamless healthcare delivery.
        </p>
        <div class="services-list">
            <div class="service-item">
                <h3>Real-Time Doctor Booking</h3>
                <p>Book available doctors instantly and manage appointments with ease.</p>
            </div>
            <div class="service-item">
                <h3>Live Patient Tracking</h3>
                <p>Track current patient numbers in real time to estimate waiting times.</p>
            </div>
            <div class="service-item">
                <h3>Digital Prescriptions</h3>
                <p>Doctors can issue digital prescriptions directly sent to the pharmacy.</p>
            </div>
            <div class="service-item">
                <h3>Seamless Pharmacy Integration</h3>
                <p>Collect prescribed medicines without unnecessary delays.</p>
            </div>
        </div>
    </div>
</section>

    <section class="login-section" id ="login">
        <div class="login-container">
            <h2>Login</h2>
            <form action="#" method="post">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-group">
                    <button type="submit">Login</button>
                </div>
                <div class="footer">
                    <p>Don't have an account? <a href="pages/register.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </section>
    
</main>
<?php include 'includes/footer.php'; ?>