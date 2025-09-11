<style>
    /* main picture in services page*/
    .services-main-pic{
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: center;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    .services-main-pic:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }

    /* paragraph in services page*/
    #services-mini-header li
    {
        margin-bottom : 5mm;
        text-decoration: none;
        cursor: pointer;
        
    }
    #services-mini-header li :hover
    {
        color: #E7503CFF;
    }
    #services-mini-header
    {
        list-style-type: none;
        padding-left: 0;
    }
    #services-mini-header a
    {
        text-decoration: none;
        color : black;
        font-weight: 200px;
        font-size: 5mm;
    }
    /*active links*/
    .active-link{
        color:#E7863CFF !important;
        font-weight: bold;
    } 
    .btn btn-primary{
        color:color:#E7863CFF;
    }
</style>