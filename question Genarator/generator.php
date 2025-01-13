<?php
$questions = array(
    array(
        "question" => "What is the difference between symmetric and asymmetric encryption?",
        "choices" => array(
            "A: Symmetric uses the same key for encryption and decryption; asymmetric uses different keys.",
            "B: Asymmetric uses the same key for encryption and decryption; symmetric uses different keys.",
            "C: Symmetric and asymmetric both use the same key for encryption and decryption.",
            "D: Symmetric encryption is always stronger than asymmetric encryption."
        ),
        "correct" => "A"
    ),
    array(
        "question" => "What is phishing, and how can you protect yourself against it?",
        "choices" => array(
            "A: Phishing is a type of malware; protection is by installing antivirus software.",
            "B: Phishing is a social engineering attack; protection includes being cautious about emails and links.",
            "C: Phishing is a type of firewall breach; protection is by updating the firewall.",
            "D: Phishing is a form of password cracking; protection is by using strong passwords."
        ),
        "correct" => "B"
    ),
    array(
        "question" => "Define what a VPN is and how it enhances security.",
        "choices" => array(
            "A: VPN is a virus protection network.",
            "B: VPN is a virtual private network that encrypts internet traffic and masks your online identity.",
            "C: VPN is a type of firewall.",
            "D: VPN is a wireless security protocol."
        ),
        "correct" => "B"
    ),
    array(
        "question" => "Which of the following characteristics make a password strong?",
        "choices" => array(
            "A: A password with 6 characters and no numbers or symbols.(Testpassword)",
            "B: A password that uses only lowercase letters.(testpassword)",
            "C: A password that includes a mix of uppercase and lowercase letters, numbers, and symbols, and is at least 12 characters long.(Te@st#passw%ord1#2@)",
            "D: A password that is the user's date of birth. (20000508)"
        ),
        "correct" => "C"
    )
    // Add more questions here
);

$random_index = array_rand($questions);
echo json_encode($questions[$random_index]);
?>