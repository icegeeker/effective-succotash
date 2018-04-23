// pages/cafe/details.js
Page({

    /**
     * 页面的初始数据
     */
    data: {
        cafedata: [{
            "cafe_id": 1,
            "cafe_img": "/imgs/cafe.jpeg",
            "cafe_name": "猫头鹰桌游剧本体验馆(双井店)",
            "cafe_add": "双井 广渠门外大街8号优士阁A座105室",
            "cafe_des": "这是桌游吧描述",
            "cafe_coll": false
        }]
    },

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function(options) {
        console.log(options.cafe_id);
        /*请求数据*/
        wx.request({
            url: 'test.php?cafe_id=' + options.cafe_id, //仅为示例，并非真实的接口地址
            data: {},
            header: {
                'content-type': 'application/json'
            },
            success: function(res) {
                console.log(res.data);
                that.setData({
                    cafedata: res.data.cafedata
                });
            }
        });
    },

    /**
     * 生命周期函数--监听页面初次渲染完成
     */
    onReady: function() {

    },

    /**
     * 生命周期函数--监听页面显示
     */
    onShow: function() {

    },

    /**
     * 生命周期函数--监听页面隐藏
     */
    onHide: function() {

    },

    /**
     * 生命周期函数--监听页面卸载
     */
    onUnload: function() {

    },

    /**
     * 页面相关事件处理函数--监听用户下拉动作
     */
    onPullDownRefresh: function() {

    },

    /**
     * 页面上拉触底事件的处理函数
     */
    onReachBottom: function() {

    },

    /**
     * 用户点击右上角分享
     */
    onShareAppMessage: function() {

    }
});