<style>
    .section-title {
    color: #2c3e50;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
}


.image-container {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    height: 100%;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.image-container:hover img {
    transform: scale(1.03);
}


.v-section {
    margin-bottom: 50px;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 10px;
    border-left: 5px solid #e74c3c;
}

.m-section {
    padding: 30px;
    background: #f8f9fa;
    border-radius: 10px;
    border-right: 5px solid #E7863CFF;
}

.v-title {
    font-size: 2rem;
    font-weight: 700;
    color: #93450AFF;
    margin-bottom: 20px;
    text-align: left;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.m-title {
    font-size: 2rem;
    font-weight: 700;
    color: #E7863CFF;
    margin-bottom: 20px;
    text-align: right;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.v-text {
    font-size: 1.1rem;
    color: #444;
    line-height: 1.7;
    text-align: left;
}

.m-text {
    font-size: 1.1rem;
    color: #444;
    line-height: 1.7;
    text-align: right;
}

.divider {
    height: 2px;
    background: linear-gradient(to right, #93450AFF, #E7863CFF);
    width: 90%;
    margin: 40px auto;
    border-radius: 2px;
}

@media (max-width: 768px) {
    .v-title, .m-title {
        font-size: 1.7rem;
        text-align: center;
    }
    
    .v-text, .m-text {
        text-align: center;
    }
    
    .v-section {
        border-left: 4px solid #93450AFF;
        border-right: 4px solid #93450AFF;
    }
    
    .m-section {
        border-right: 4px solid #E7863CFF;
        border-left: 4px solid #E7863CFF;
    }
}
</style>