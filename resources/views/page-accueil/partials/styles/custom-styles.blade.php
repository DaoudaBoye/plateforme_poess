 <style>
    /* Responsive pour les petits écrans */
    @media (max-width: 576px) {
      .modal-dialog {
        max-width: 90%;
      }
    }


    /* Style pour les cubes animés */
    .loading-cubes {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 5px;
    }

    .loading-cube {
      width: 20px;
      height: 20px;
      background-color: #007bff;
      border-radius: 5px;
      animation: bounce 0.6s infinite alternate;
    }

    .loading-cube:nth-child(2) {
      animation-delay: 0.2s;
    }

    .loading-cube:nth-child(3) {
      animation-delay: 0.4s;
    }

    /* Animation pour les cubes */
    @keyframes bounce {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-15px);
      }
    }
    
    /* Masquer les cubes au départ */
    .loading-cubes {
      display: none;
    }
 
/*--------------------------------------------------------------
# Articles Section Styles
--------------------------------------------------------------*/
    :root {
      --primary-color: #0d6efd;
      --gradient-start: #f5f7fa;
      --gradient-end: #c3cfe2;
      --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
      --card-shadow-hover: 0 12px 24px rgba(0, 0, 0, 0.15);
      --transition-speed: 0.3s;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .articles-section {
      background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
      padding: 80px 0;
      position: relative;
      overflow: hidden;
    }

    .articles-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 100%;
      background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="%23ffffff" opacity="0.1"/></svg>');
      pointer-events: none;
    }

    .section-title h2 {
      font-size: 2.5rem;
      color: #2c3e50;
      position: relative;
      display: inline-block;
    }

    /* Featured Article */
    .featured-article {
      border-radius: 20px;
      overflow: hidden;
      transition: transform var(--transition-speed);
    }

    .featured-article:hover {
      transform: translateY(-5px);
      box-shadow: var(--card-shadow-hover);
    }

    .featured-article img {
      transition: transform 0.5s ease;
    }

    .featured-article:hover img {
      transform: scale(1.05);
    }

    /* Article Cards */
    .article-card {
      border-radius: 15px;
      overflow: hidden;
      transition: all var(--transition-speed) ease;
      background: white;
    }

    .article-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--card-shadow-hover);
    }

    .article-card .card-img-top {
      transition: transform 0.5s ease;
    }

    .article-card:hover .card-img-top {
      transform: scale(1.1);
    }

    .article-card .stretched-link:hover {
      color: var(--primary-color) !important;
    }

    /* Filter Buttons */
    .filter-btn {
      border-radius: 50px;
      padding: 10px 24px;
      transition: all var(--transition-speed);
      border: 2px solid var(--primary-color);
      background: white;
      color: var(--primary-color);
    }

    .filter-btn:hover, .filter-btn.active {
      background: var(--primary-color);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
    }

    /* Newsletter Card */
    .newsletter-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 15px;
      position: relative;
      overflow: hidden;
    }

    .newsletter-card::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      animation: pulse 4s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); }
    }

    .newsletter-card .form-control {
      border: none;
      border-radius: 50px 0 0 50px;
      padding: 12px 20px;
    }

    .newsletter-card .btn {
      border-radius: 0 50px 50px 0;
      padding: 12px 24px;
    }

    /* Badge Styles */
    .badge {
      font-weight: 600;
      padding: 8px 16px;
      border-radius: 50px;
      font-size: 0.85rem;
    }

    /* Avatar */
    .avatar {
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .section-title h2 {
        font-size: 1.8rem;
      }

      .featured-article .card-body {
        padding: 2rem !important;
      }

      .filter-btn {
        font-size: 0.9rem;
        padding: 8px 16px;
      }
    }

    /* Loading Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 0.6s ease-out;
    }

    /* Accessibility */
    .btn:focus, .form-control:focus {
      outline: 3px solid rgba(13, 110, 253, 0.5);
      outline-offset: 2px;
    }

    .stretched-link::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1;
      content: "";
    }
  </style>