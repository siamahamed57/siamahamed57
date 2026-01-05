<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD. Ibrahim Khalil - GitHub Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Display', 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #000;
            color: #f5f5f7;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-gradient {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #000 0%, #1a1a2e 50%, #16213e 100%);
            z-index: -2;
        }

        .bg-orbs {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: float 20s infinite ease-in-out;
        }

        .orb1 {
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, #00FF9C, #00D9FF);
            top: -10%;
            left: -10%;
            animation-delay: 0s;
        }

        .orb2 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #FF006E, #8338EC);
            bottom: -10%;
            right: -10%;
            animation-delay: 5s;
        }

        .orb3 {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #3A86FF, #00FF9C);
            top: 50%;
            left: 50%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(50px, -50px) scale(1.1); }
            50% { transform: translate(-30px, 30px) scale(0.9); }
            75% { transform: translate(40px, 20px) scale(1.05); }
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
        }

        /* Header */
        .header {
            text-align: center;
            padding: 60px 20px;
            margin-bottom: 60px;
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .name-highlight {
            background: linear-gradient(135deg, #00FF9C, #00D9FF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0%, 100% { filter: hue-rotate(0deg); }
            50% { filter: hue-rotate(30deg); }
        }

        .header h3 {
            font-size: 1.3rem;
            font-weight: 400;
            line-height: 1.8;
            color: #a1a1a6;
            margin-bottom: 30px;
        }

        .typing-text {
            font-size: 1.1rem;
            color: #00FF9C;
            min-height: 60px;
            margin-top: 20px;
        }

        /* About Section */
        .about {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 50px;
            margin-bottom: 60px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #fff, #a1a1a6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-grid {
            display: grid;
            gap: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .about-item:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateX(10px);
        }

        /* NEEXZEN Section */
        .neexzen {
            background: linear-gradient(135deg, rgba(0, 255, 156, 0.1), rgba(0, 217, 255, 0.1));
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 50px;
            margin-bottom: 60px;
            border: 1px solid rgba(0, 255, 156, 0.2);
            box-shadow: 0 20px 60px rgba(0, 255, 156, 0.2);
            position: relative;
            overflow: hidden;
        }

        .neexzen::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 255, 156, 0.1) 0%, transparent 70%);
            animation: rotate 15s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .neexzen-content {
            position: relative;
            z-index: 1;
        }

        .neexzen h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #00FF9C;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .service-card {
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-color: #00FF9C;
            box-shadow: 0 10px 30px rgba(0, 255, 156, 0.3);
        }

        /* Projects Section - Enhanced */
        .projects {
            margin-bottom: 60px;
        }

        .projects h2 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 50px;
            background: linear-gradient(135deg, #FF006E, #8338EC, #3A86FF, #00FF9C);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-shift 5s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 35px;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 24px;
            padding: 2px;
            background: linear-gradient(135deg, transparent, transparent);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s;
        }

        .project-card:nth-child(1) { border-color: rgba(0, 255, 156, 0.3); }
        .project-card:nth-child(1)::before { background: linear-gradient(135deg, #00FF9C, #00D9FF); }
        .project-card:nth-child(1):hover { box-shadow: 0 20px 60px rgba(0, 255, 156, 0.4); }

        .project-card:nth-child(2) { border-color: rgba(255, 0, 110, 0.3); }
        .project-card:nth-child(2)::before { background: linear-gradient(135deg, #FF006E, #8338EC); }
        .project-card:nth-child(2):hover { box-shadow: 0 20px 60px rgba(255, 0, 110, 0.4); }

        .project-card:nth-child(3) { border-color: rgba(58, 134, 255, 0.3); }
        .project-card:nth-child(3)::before { background: linear-gradient(135deg, #3A86FF, #00FF9C); }
        .project-card:nth-child(3):hover { box-shadow: 0 20px 60px rgba(58, 134, 255, 0.4); }

        .project-card:nth-child(4) { border-color: rgba(131, 56, 236, 0.3); }
        .project-card:nth-child(4)::before { background: linear-gradient(135deg, #8338EC, #FF006E); }
        .project-card:nth-child(4):hover { box-shadow: 0 20px 60px rgba(131, 56, 236, 0.4); }

        .project-card:nth-child(5) { border-color: rgba(0, 217, 255, 0.3); }
        .project-card:nth-child(5)::before { background: linear-gradient(135deg, #00D9FF, #3A86FF); }
        .project-card:nth-child(5):hover { box-shadow: 0 20px 60px rgba(0, 217, 255, 0.4); }

        .project-card::before {
            opacity: 1;
        }

        .project-card:hover {
            transform: translateY(-15px) scale(1.02);
        }

        .project-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .project-card:nth-child(1) .project-icon { background: linear-gradient(135deg, #00FF9C, #00D9FF); }
        .project-card:nth-child(2) .project-icon { background: linear-gradient(135deg, #FF006E, #8338EC); }
        .project-card:nth-child(3) .project-icon { background: linear-gradient(135deg, #3A86FF, #00FF9C); }
        .project-card:nth-child(4) .project-icon { background: linear-gradient(135deg, #8338EC, #FF006E); }
        .project-card:nth-child(5) .project-icon { background: linear-gradient(135deg, #00D9FF, #3A86FF); }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #fff;
        }

        .project-description {
            color: #a1a1a6;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #00FF9C;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .project-link:hover {
            gap: 12px;
        }

        /* Tech Stack */
        .tech-stack {
            text-align: center;
            margin-bottom: 60px;
        }

        .tech-stack h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #fff;
        }

        .tech-icons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .tech-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .tech-icon:hover {
            transform: translateY(-10px) rotate(5deg);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 255, 156, 0.3);
        }

        /* Connect Section */
        .connect {
            text-align: center;
            padding: 50px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .connect h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social-btn {
            padding: 15px 30px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-block;
        }

        .social-btn.gmail {
            background: linear-gradient(135deg, #D14836, #EA4335);
            color: #fff;
        }

        .social-btn.linkedin {
            background: linear-gradient(135deg, #0077B5, #0A66C2);
            color: #fff;
        }

        .social-btn.facebook {
            background: linear-gradient(135deg, #1877F2, #0866FF);
            color: #fff;
        }

        .social-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        /* Quote */
        .quote {
            text-align: center;
            margin-top: 60px;
            padding: 40px;
            font-size: 1.3rem;
            font-style: italic;
            color: #a1a1a6;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 { font-size: 2.5rem; }
            .header h3 { font-size: 1rem; }
            .projects h2 { font-size: 2rem; }
            .about, .neexzen, .connect { padding: 30px; }
        }
    </style>
</head>
<body>
    <div class="bg-gradient"></div>
    <div class="bg-orbs">
        <div class="orb orb1"></div>
        <div class="orb orb2"></div>
        <div class="orb orb3"></div>
    </div>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Hi 👋, I'm <span class="name-highlight">MD. Ibrahim Khalil</span></h1>
            <h3>
                🚀 Software Engineer | MERN Stack Developer | WordPress Expert | AI & ML Enthusiast<br/>
                Founder & CEO of <b style="color: #00FF9C;">NEEXZEN</b>
            </h3>
            <div class="typing-text" id="typingText"></div>
        </div>

        <!-- About -->
        <div class="about">
            <h2>🧠 About Me</h2>
            <div class="about-grid">
                <div class="about-item">🎓 <strong>BSc in Computer Science & Engineering</strong> — AIUB (Final Year)</div>
                <div class="about-item">🧪 Research: <strong>Real-Time Cyberattack Detection using Machine Learning</strong></div>
                <div class="about-item">🔬 Previous Research: <strong>AI for Renewable Energy Optimization</strong></div>
                <div class="about-item">🏢 Founder of <strong>NEEXZEN</strong> — Future-ready Software & SaaS Company</div>
                <div class="about-item">👨‍🏫 Instructor of <strong>WordPress & MERN Stack</strong></div>
                <div class="about-item">🌍 From <strong>Gazipur, Bangladesh 🇧🇩</strong></div>
                <div class="about-item">🎯 Ultimate Goal: <strong>Dr. MD. Ibrahim Khalil</strong></div>
            </div>
        </div>

        <!-- NEEXZEN -->
        <div class="neexzen">
            <div class="neexzen-content">
                <h2>🏢 NEEXZEN — My Software Company</h2>
                <p style="font-size: 1.1rem; margin-bottom: 20px;">
                    <strong>NEEXZEN</strong> is a future-focused software company delivering scalable, secure, and intelligent digital solutions worldwide.
                </p>
                <div class="services-grid">
                    <div class="service-card">🌐 Full Stack Web Development</div>
                    <div class="service-card">🎨 UI/UX Design</div>
                    <div class="service-card">🤖 AI & Machine Learning Solutions</div>
                    <div class="service-card">🔐 Cybersecurity & Performance</div>
                    <div class="service-card">📈 SEO, GTM & Meta Pixel</div>
                    <div class="service-card">🚀 SaaS Product Development</div>
                </div>
                <p style="margin-top: 30px; font-size: 1.1rem;">
                    🔗 <strong>Website:</strong> <a href="https://neexzen.com" style="color: #00FF9C;">neexzen.com</a>
                </p>
            </div>
        </div>

        <!-- Featured Projects -->
        <div class="projects">
            <h2>🚀 Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-icon">🏢</div>
                    <h3 class="project-title">NEEXZEN</h3>
                    <p class="project-description">Official company website & service platform delivering scalable solutions worldwide.</p>
                    <a href="https://neexzen.com" class="project-link">Visit Site →</a>
                </div>

                <div class="project-card">
                    <div class="project-icon">🎨</div>
                    <h3 class="project-title">UIXpertise</h3>
                    <p class="project-description">Professional WordPress & UI/UX portfolio showcasing design excellence.</p>
                    <a href="https://uixpertise.com" class="project-link">Explore →</a>
                </div>

                <div class="project-card">
                    <div class="project-icon">📚</div>
                    <h3 class="project-title">UNIES E-Learning</h3>
                    <p class="project-description">Large-scale LMS platform with courses & affiliate management system.</p>
                    <a href="https://unies.com.bd" class="project-link">Learn More →</a>
                </div>

                <div class="project-card">
                    <div class="project-icon">🚚</div>
                    <h3 class="project-title">Lyvaa Delivery</h3>
                    <p class="project-description">WooCommerce delivery fee automation system for e-commerce optimization.</p>
                    <a href="https://lyvaa.com" class="project-link">Check Out →</a>
                </div>

                <div class="project-card">
                    <div class="project-icon">🎮</div>
                    <h3 class="project-title">FiveM-QBCore</h3>
                    <p class="project-description">Gaming & developer resource platform for FiveM community.</p>
                    <a href="https://fivem-qbcore.com" class="project-link">Discover →</a>
                </div>
            </div>
        </div>

        <!-- Tech Stack -->
        <div class="tech-stack">
            <h2>🛠️ Tech Stack</h2>
            <div class="tech-icons">
                <div class="tech-icon">⚛️</div>
                <div class="tech-icon">📦</div>
                <div class="tech-icon">🟢</div>
                <div class="tech-icon">🍃</div>
                <div class="tech-icon">🔷</div>
                <div class="tech-icon">🐍</div>
                <div class="tech-icon">☕</div>
                <div class="tech-icon">⚙️</div>
                <div class="tech-icon">🎯</div>
                <div class="tech-icon">📱</div>
            </div>
        </div>

        <!-- Connect -->
        <div class="connect">
            <h2>🌐 Connect With Me</h2>
            <div class="social-links">
                <a href="mailto:your.email@example.com" class="social-btn gmail">📧 Gmail</a>
                <a href="https://linkedin.com/in/your-linkedin" class="social-btn linkedin">💼 LinkedIn</a>
                <a href="https://facebook.com/yourprofile" class="social-btn facebook">📘 Facebook</a>
            </div>
        </div>

        <!-- Quote -->
        <div class="quote">
            <p>💡 "I don't just write code — I engineer scalable solutions that create real-world impact."</p>
            <p style="margin-top: 20px;"><strong>— Mohammad Ibrahim Khalil</strong></p>
        </div>
    </div>

    <script>
        // Typing Animation
        const phrases = [
            "Software Engineer | Problem Solver | Founder",
            "Building Scalable Web & AI Solutions",
            "NEEXZEN - Designing Tomorrow's Technology",
            "Web | AI | SaaS | Cybersecurity | ML",
            "CSE Final Year Student at AIUB 🎓"
        ];
        
        let phraseIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingSpeed = 100;
        const deletingSpeed = 50;
        const pauseTime = 2000;
        
        function typeText() {
            const currentPhrase = phrases[phraseIndex];
            const typingElement = document.getElementById('typingText');
            
            if (isDeleting) {
                typingElement.textContent = currentPhrase.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentPhrase.substring(0, charIndex + 1);
                charIndex++;
            }
            
            if (!isDeleting && charIndex === currentPhrase.length) {
                isDeleting = true;
                setTimeout(typeText, pauseTime);
                return;
            }
            
            if (isDeleting && charIndex === 0) {
                isDeleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
            }
            
            setTimeout(typeText, isDeleting ? deletingSpeed : typingSpeed);
        }
        
        typeText();
    </script>
</body>
</html>
