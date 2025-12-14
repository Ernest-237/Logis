<!-- Bouton WhatsApp Flottant -->
    <a href="https://wa.me/237672105771?text=Bonjour%20KDL%20LOGIS-cargo,%20j'aimerais%20obtenir%20des%20informations%20sur%20vos%20services" 
       class="whatsapp-float" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Contactez-nous sur WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-tooltip">Besoin d'aide ? Contactez-nous !</span>
    </a>

    <style>
    /* Bouton WhatsApp Flottant */
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
        z-index: 9999;
        text-decoration: none;
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
        animation: none;
    }

    .whatsapp-float i {
        animation: shake 1s ease-in-out infinite;
    }

    .whatsapp-float:hover i {
        animation: none;
    }

    /* Tooltip */
    .whatsapp-tooltip {
        position: absolute;
        right: 70px;
        background: #fff;
        color: #333;
        padding: 10px 15px;
        border-radius: 8px;
        white-space: nowrap;
        font-size: 14px;
        font-weight: 600;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        pointer-events: none;
    }

    .whatsapp-tooltip::after {
        content: '';
        position: absolute;
        right: -6px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 6px solid #fff;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
    }

    .whatsapp-float:hover .whatsapp-tooltip {
        opacity: 1;
        visibility: visible;
        right: 75px;
    }

    /* Animation Pulse */
    @keyframes pulse {
        0%, 100% {
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
        }
        50% {
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.7), 0 0 0 10px rgba(37, 211, 102, 0.2);
        }
    }

    /* Animation Shake */
    @keyframes shake {
        0%, 100% { transform: rotate(0deg); }
        10%, 30%, 50%, 70%, 90% { transform: rotate(-10deg); }
        20%, 40%, 60%, 80% { transform: rotate(10deg); }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .whatsapp-float {
            width: 55px;
            height: 55px;
            font-size: 28px;
            bottom: 20px;
            right: 20px;
        }

        .whatsapp-tooltip {
            display: none; /* Cache le tooltip sur mobile */
        }
    }

    @media (max-width: 480px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            font-size: 26px;
            bottom: 15px;
            right: 15px;
        }
    }
    </style>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date('Y'); ?> KDL LOGIS-cargo Services. Tous droits réservés.</p>
            <p style="margin-top: 0.5rem; font-style: italic;">"Que l'Afrique avance sans frontières"</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>