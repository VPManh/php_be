<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bai_viets')->delete();

        DB::table('bai_viets')->truncate();

        DB::table('bai_viets')->insert([
            ['id' => '1', 'ten_bai_viet' => '50 địa điểm du lịch Đà Nẵng HẤP DẪN NHẤT bạn tha hồ lựa chọn', 'mo_ta_ngan' => 'Du lịch Đà Nẵng thì nên đi đâu, chơi gì? Top 50 địa điểm du lịch Đà Nẵng sẽ giới thiệu đến bạn những địa điểm du lịch HOT nhất, HẤP DẪN nhất mà bạn không thể bỏ qua khi đến với thành phố của những cây cầu.', 'mo_ta_chi_tiet' => 'Đưa vào hoạt động năm 2013, điểm tham quan Đà Nẵng cầu Rồng là một trong những địa điểm du lịch mới ở Đà Nẵng hấp dẫn du khách. Với thiết kế độc đáo mang hình dáng con rồng bắc qua sông Hàn thơ mộng, cầu Rồng là cây cầu thứ 7 tạo nên biểu tượng “thành phố của những cây cầu”. Đến đây vào các ngày cuối tuần, bạn còn xem được cảnh rồng phun lửa, phun nước sống động. Nằm ở phía nam bán đảo Sơn Trà, Bãi Bụt là một trong những địa điểm du lịch Đà Nẵng miễn phí đáng đến nhất. Được mệnh danh là tuyệt cảnh dưới chân Chùa Linh Ứng, Bãi Bụt là nơi nhiều du khách trong và ngoài nước chọn làm nơi tham quan, tắm biển, ngắm san hô, khám phá các loài sinh vật biển,... khi đến du lịch tại Đà Nẵng.', 'hinh_anh' => 'https://statics.vinpearl.com/du-lich-da-nang_1657939501.jpg', 'tinh_trang' => '1'],
            ['id' => '2', 'ten_bai_viet' => 'Top 30+ đặc sản Đà Nẵng nên thưởng thức và mua về làm quà', 'mo_ta_ngan' => '30+ món ngon, đặc sản Đà Nẵng mà bạn nhất định phải thử và mua về làm quà cho người thân, gia đình, bạn bè trong chuyến du lịch sắp tới, đừng bỏ qua nha!', 'mo_ta_chi_tiet' => 'Món ăn đặc sản Đà Nẵng không thiếu, thậm chí có ngồi kể cả ngày cũng không hết được cả trăm thức quà ngon lành mang đậm văn hóa ẩm thực miền Trung. Nhưng để gọi là đặc sắc nhất, nổi bật nhất, du khách ghé thăm không thể không thử phải kể đến mấy chục món trứ danh dưới đây. Quả không ngoa khi nói Đà Nẵng là xứ ẩm thực đặc biệt, đa dạng với đủ các loại món ngon mà món nào ăn một lần người ta cũng sẽ nhớ mãi.', 'hinh_anh' => 'https://statics.vinpearl.com/dac-san-da-nang-1.jpg', 'tinh_trang' => '1'],
            ['id' => '3', 'ten_bai_viet' => 'Ngũ Hành Sơn Đà Nẵng - “Nam Thiên Danh Thắng” trứ danh', 'mo_ta_ngan' => 'Ngũ Hành Sơn là quần thể gồm 6 ngọn núi mọc gần nhau, quy tụ đủ những vẻ đẹp từ thiên nhiên và tâm linh, mang đến cho du khách hành trình tham quan, khám phá thắng cảnh tuyệt vời.', 'mo_ta_chi_tiet' => 'Ngũ Hành Sơn là tuyệt tác về cảnh quan thiên nhiên mà tạo hóa ban tặng cho vùng đất Đà Nẵng. Có vẻ đẹp hài hòa của vùng sinh thái tự nhiên đan xen cùng với đời sống văn hóa tâm linh nên nơi đây càng ngày càng thu hút khách du lịch đến tham quan hàng năm. Địa điểm du lịch Đà Nẵng Ngũ Hành Sơn nằm ở khu vực có vị trí địa lý hết sức thuận lợi, cách trung tâm thành phố Đà Nẵng 8km. Đây là điểm đến được du khách yêu mến trên hành trình tham quan các vùng đất thuộc con đường di sản Miền Trung như: Cố Đô Huế – Ngũ Hành Sơn – Phố cổ Hội An - Khu di tích đền tháp Mỹ Sơn.', 'hinh_anh' => 'https://statics.vinpearl.com/ngu-hanh-son-01_1629767291.jpg', 'tinh_trang' => '1'],
            ['id' => '4', 'ten_bai_viet' => 'Combo 3N2Đ tàu Phú Quốc Express & VinHolidays Fiesta hoặc TK Phú Quốc Hotel', 'mo_ta_ngan' => 'Khởi động một mùa hè diệu kỳ, Vinpearl kết hợp với hãng tàu 5 sao Phú Quốc Express giới thiệu combo khám phá đảo ngọc thiên đường với hành trình ấn tượng bằng tàu cao tốc Phú Quốc Express ', 'mo_ta_chi_tiet' => 'Hãng tàu với công nghệ hiện đại, tiên tiến nhất của thế giới hiện nay: Tàu cao tốc hai thân vận chuyển hành khách đường biển, với chất lượng kỹ thuật và độ an toàn Châu Âu, sử dụng thiết bị động lực của Rolls Royce, dịch vụ cao cấp chuẩn 5 sao. Tốc độ tối ưu lên tới 30 hải lý/giờ, mang bạn đến đảo với thời gian tiết kiệm nhất.  Tàu gồm 2 khoang: khoang phổ thông và khoang VIP. Khoang VIP có thiết kế ghế bọc da thật, có khả năng ngả 130 độ và màn hình giải trí, hệ thống âm thanh và tai nghe không dây rất tiện nghi và sang trọng phục vụ khách, trong khi đó khoang phổ thông cũng được thiết kế rất sang trọng với vách khoang ốp da, sàn tàu thiết kế chống ồn và say sóng. Trên tàu còn có hệ thống camera hành trình, ghi lại thông tin hành trình của tàu. Boong tàu được thiết kế với sức chứa lên tới 50 người. Với những ai thích không gian mở, không thích ngồi trong khoang tàu, có thể lên boong tàu để ngắm cảnh và chụp hình.', 'hinh_anh' => 'https://booking-static.vinpearl.com/tours/2c563f58e6244070b23cf40ef5f9cc9a_DJI_0527%20(1).jpg', 'tinh_trang' => '1'],
            ['id' => '5', 'ten_bai_viet' => 'Trọn bộ kinh nghiệm, điểm đến & combo du lịch Phú Quốc từ A - Z 2024', 'mo_ta_ngan' => 'Du lịch Phú Quốc với trọn bộ cẩm nang về thời điểm, khí hậu, phương tiện đi lại, kế hoạch ăn - chơi - ngủ - nghỉ từ A - Z sau đây sẽ giúp mọi du khách tận hưởng kỳ nghỉ của mình trọn vẹn nhất!', 'mo_ta_chi_tiet' => 'Thuộc địa phận tỉnh Kiên Giang, nằm trong vịnh Thái Lan, đảo Phú Quốc từ lâu đã nổi tiếng với du khách từ mọi miền đất nước và cả khách du lịch quốc tế. Không chỉ là hòn đảo xinh đẹp với phong cảnh thiên nhiên yên bình, hoang sơ, khí hậu thuận lợi cho hoạt động vui chơi, nghỉ dưỡng, Phú Quốc còn là điểm đến lý tưởng cho nhiều hoạt động khám phá thiên nhiên kỳ thú.', 'hinh_anh' => 'https://statics.vinpearl.com/du-lich-phu-quoc-hoang-hon_1649836308.jpg', 'tinh_trang' => '1'],
            ['id' => '6', 'ten_bai_viet' => 'Lịch trình du lịch Phú Quốc 3 ngày cho nhóm bạn vui hết cỡ', 'mo_ta_ngan' => 'Lịch trình du lịch Phú Quốc 3 ngày đầy đủ và chi tiết dưới đây sẽ giúp các hội bạn thân khám phá trọn vẹn những bãi biển thơ mộng, những khu vui chơi, giải trí hấp dẫn nhất Phú Quốc.', 'mo_ta_chi_tiet' => 'Phú Quốc đẹp nhất từ tháng 10 đến tháng 4 hàng năm, khi thời tiết ít mưa, thuận lợi cho các hoạt động du lịch. Sau đây là những gợi ý lịch trình du lịch Phú Quốc 3 ngày từ độc giả Marine Poy cùng nhóm bạn 7 người trong 3 ngày. Mỗi lần đến với Phú Quốc, du khách nên dành ít nhất 3-4 ngày để trải nghiệm được hết các địa điểm du lịch hấp dẫn. Một lịch trình 3 ngày tại Phú Quốc có thể đảm bảo tiết kiệm thời gian và chi phí đi lại sẽ có mức giá khoảng 5 triệu đồng/người.', 'hinh_anh' => 'https://statics.vinpearl.com/Hinh-anh-lich-trinh-du-lich-phu-quoc-cho-nhom-ban-3-ngay-1.jpg', 'tinh_trang' => '1'],
        ]);
    }
}
