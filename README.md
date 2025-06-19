# 🥗 CareCircle: Diet Plan & Nutrition Website

CareCircle is a responsive and user-friendly diet plan website built to help users manage their health goals through personalized diet plans, healthy recipes, and fitness tools. The platform allows users to book appointments, access calorie/BMI calculators, and explore tips for weight loss, muscle gain, and balanced nutrition.

## 📌 Features

- 💻 Responsive HTML/CSS/JS Frontend
- 📋 Appointment Booking with PHP & MySQL
- 📊 BMI, Calorie & Macronutrient Calculators
- 🍽️ Meal Plans (Breakfast, Lunch, Dinner, Snacks)
- 📚 Health & Nutrition Blogs
- 🧠 Custom Diet Plan Categories:
  - Weight Loss
  - Muscle Gain
  - Special Diets (Vegan, Diabetic-friendly, etc.)
- 📞 Contact Page with FAQs, About, and Policy Info

## 📁 Folder Structure

carecircle/
│
├── css/
│ ├── style.css
│ ├── responsive.css
│ └── other stylesheets...
│
├── js/
│ ├── main.js
│ └── form-handling scripts...
│
├── img/
│ └── images used in the UI
│
├── submit_appointment.php
├── config.php
├── view_appointments.php
├── index.html
├── about.html
├── contact.html
└── other HTML pages...

## ⚙️ Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Tools:** XAMPP / phpMyAdmin

## 🛠️ Installation Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/dietplan-project.git
2. Move project folder to your XAMPP htdocs directory.

3. Start Apache and MySQL via XAMPP.

4. Create a database in phpMyAdmin named diet_plan.

5. Run the SQL script to create the appointments table:

CREATE TABLE appointments (...);

Visit http://localhost/dietplan-project/index.html in your browser.

🔒 Security Notes
Basic form validation is included.

Prepared statements are recommended to prevent SQL injection.

File uploads and admin features can be added for extended functionality.

📄 License
This project is open-source and available under the MIT License.

### ✅ What You Should Do Next:
- Replace placeholders (like screenshot paths, GitHub URL, your name/email) with your actual info.
- Create a `LICENSE` file (MIT is a good default).
- Add screenshots in a folder like `screenshots/` if you want visual previews.








