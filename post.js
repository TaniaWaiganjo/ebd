const express = require("express");
const router = express.Router();

//Get all posts
router.get("/post",(req, res) => {
    res.send("Inside posts");
});

router.get('/specific', (req,res) => {
    res.send("Inside the specific posts");

}  )

module.exports = router;