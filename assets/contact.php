<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ফর্মের ডেটা সংগ্রহ
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['number']));
    $message = htmlspecialchars(trim($_POST['message']));

    // রিসিভার ইমেইল
    $to = "hellojunayed.bd@gmail.com";
    
    // সাবজেক্ট এবং বডি সেট করুন
    $subject = "New Contact Form Submission";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message\n";

    // হেডার সেট করুন
    $headers = "From: $email";

    // ইমেইল পাঠানো
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Failed to send your message. Please try again later.";
    }
} else {
    echo "Invalid request!";
}
?>
