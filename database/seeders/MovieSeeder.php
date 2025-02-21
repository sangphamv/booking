<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
//        Movie::factory()->count(10)->create();
        DB::table('movies')->insert([
            [
                'title' => 'Nữ Tu Bóng Tối',
                'category' => 'Kinh dị',
                'duration' => 114,
                'release_date' => '2025-02-19',
                'description' => 'Dark Nuns / Nữ Tu Bóng Tối kể về hai nữ tu Junia (Song Hye-kyo) và Michaela (Jeon Yeo-been) dùng mọi nỗ lực thực hiện nghi lễ trừ tà để cứu rỗi cậu bé Hee Joon đang bị linh hồn tà ác chiếm giữ. Một cuộc chiến không hồi kết giữa đức tin và quỷ dữ, giữa bí ẩn tâm linh và niềm tin y học.',
                'trailer' => 'https://youtu.be/PnlS4B0GPOA',
                'image' => 'https://cdn.galaxycine.vn/media/2025/2/11/dark-nuns-sneak-500_1739260872262.jpg',
                'price' => 100000,
            ],
            [
                'title' => 'Đại Chiến Người Khổng Lồ: Lần Tấn Công Cuối Cùng',
                'category' => 'Hoạt hình',
                'duration' => 144,
                'release_date' => '2025-02-06',
                'description' => 'Trong cuộc chiến cuối cùng định đoạt số phận thế giới, Eren Yeager đã giải phóng sức mạnh tối thượng của các Titan. Dẫn đầu đội quân Titan Đại hình khổng lồ, Eren quyết tâm hủy diệt mọi kẻ thù đe dọa đến quê hương Eldia. Thế nhưng, cuộc chiến này không chỉ là về sự sống còn, mà còn là cuộc đối đầu giữa lòng thù hận và hy vọng. Kết thúc khúc hùng ca đầy bi tráng, di sản của chiến tranh và những ám ảnh về tự do vẫn tiếp tục đeo bám nhân loại, để lại câu hỏi về giá trị của sự hy sinh và tự do thật sự.',
                'trailer' => 'https://youtu.be/YfQ7Ftv_Sqg',
                'image' => 'https://cdn.galaxycine.vn/media/2025/1/14/attack-on-titan-the-movie-the-last-attack-2_1736838026697.jpg',
                'price' => 120000,
            ],
            [
                'title' => 'Captain America: Thế Giới Mới',
                'category' => 'Hành động',
                'duration' => 118,
                'release_date' => '2025-02-14',
                'description' => 'Sau khi gặp Tổng thống Hoa Kỳ mới đắc cử Thaddeus Ross, Sam phải đối mặt với một sự cố quy mô quốc tế. Anh phải tìm ra ra mục đích đằng sau trước khi kẻ chủ mưu thực sự khiến cả thế giới phải khiếp sợ.',
                'trailer' => 'https://youtu.be/Y3h6Noj_pEw',
                'image' => 'https://cdn.galaxycine.vn/media/2025/2/10/captambravenewworld-500_1739183561790.jpg',
                'price' => 100000,
            ],
            [
                'title' => 'Wolf Man: Người sói',
                'category' => 'Kinh dị',
                'duration' => 103,
                'release_date' => '2025-02-21',
                'description' => 'Một gia đình ở một trang trại xa xôi bị một con vật lạ tấn công, nhưng khi màn đêm buông xuống, người cha bắt đầu biến đổi thành một thứ gì đó không thể nhận ra.',
                'trailer' => 'https://youtu.be/SIEhYM2GcTs',
                'image' => 'https://www.bhdstar.vn/wp-content/uploads/2025/02/referenceSchemeHeadOfficeallowPlaceHoldertrueheight700ldapp-10.jpg',
                'price' => 100000,
            ],
            [
                'title' => 'GODZILLA X KONG: ĐẾ CHẾ MỚI',
                'category' => 'Hành động',
                'duration' => 115,
                'release_date' => '2025-03-21',
                'description' => 'Kong và Godzilla - hai sinh vật vĩ đại huyền thoại, hai kẻ thủ truyền kiếp sẽ cùng bắt tay thực thi một sứ mệnh chung mang tính sống còn để bảo vệ nhân loại, và trận chiến gắn kết chúng với loài người mãi mãi sẽ bắt đầu.',
                'trailer' => 'https://youtu.be/RXc2bs_aBuA',
                'image' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/4/41/Godzilla_x_Kong%2C_%C4%91%E1%BA%BF_ch%E1%BA%BF_m%E1%BB%9Bi.jpg/330px-Godzilla_x_Kong%2C_%C4%91%E1%BA%BF_ch%E1%BA%BF_m%E1%BB%9Bi.jpg',
                'price' => 100000,
            ],
            [
                'title' => 'NHÍM SONIC 3',
                'category' => 'Hoạt hình',
                'duration' => 110,
                'release_date' => '2025-03-12',
                'description' => 'Sonic, Knuckles và Tails phải đối mặt với một kẻ thù mới cực kỳ mạnh mẽ là Shadow - một nhân vật phản diện bí ẩn với sức mạnh không giống bất kỳ đối thủ nào họ từng đối mặt trước đây. Bị áp đảo về năng lực, Sonic phải lên đường thành lập một liên minh to lớn hơn.',
                'trailer' => 'https://youtu.be/JVXPmlgEisk',
                'image' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/1/11/SONIC_THE_HEDGEHOG_3_%E2%80%93_Vietnam_poster.jpg/330px-SONIC_THE_HEDGEHOG_3_%E2%80%93_Vietnam_poster.jpg',
                'price' => 100000,
            ],
            [
                'title' => 'BÍ KÍP LUYỆN RỒNG',
                'category' => 'Hoạt hình',
                'duration' => 110,
                'release_date' => '2025-03-12',
                'description' => 'Câu chuyện về một chàng trai trẻ với ước mơ trở thành thợ săn rồng, nhưng định mệnh lại đưa đẩy anh đến tình bạn bất ngờ với một chú rồng.',
                'trailer' => 'https://youtu.be/rvOaNwwDVZk',
                'image' => 'https://chieuphimquocgia.com.vn/_next/image?url=http%3A%2F%2Fapiv2.chieuphimquocgia.com.vn%2FContent%2FImages%2F0018324_0.jpg&w=384&q=75',
                'price' => 100000,
            ],
            [
                'title' => 'ĐÈN ÂM HỒN',
                'category' => 'Kinh dị',
                'duration' => 90,
                'release_date' => '2025-02-7',
                'description' => 'Lấy cảm các từ Chuyện Người Con Gái Nam Xương, Đèn Âm Hồn xảy tại một ngôi làng miền Bắc vào thời phong kiến. Thương một mình nuôi con trai chờ chồng đi lính trở về. Lĩnh (con Thương) vô tình nhặt được một cây đèn, từ đó cậu gọi chiếc bóng hiện trên tường là cha.',
                'trailer' => 'https://youtu.be/coktWc56rE4',
                'image' => 'https://chieuphimquocgia.com.vn/_next/image?url=http%3A%2F%2Fapiv2.chieuphimquocgia.com.vn%2FContent%2FImages%2F0018320_0.jpg&w=1920&q=75',
                'price' => 100000,
            ],
            [
                'title' => 'NHÀ GIA TIÊN',
                'category' => 'Hài',
                'duration' => 100,
                'release_date' => '2025-02-21',
                'description' => 'Nhà Gia Tiên xoay quanh câu chuyện đa góc nhìn về các thế hệ khác nhau trong một gia đình, có hai nhân vật chính là Gia Minh (Huỳnh Lập) và Mỹ Tiên (Phương Mỹ Chi). Trở về căn nhà gia tiên để quay các video “triệu view” trên mạng xã hội, Mỹ Tiên - một nhà sáng tạo nội dung thuộc thế hệ Z vốn không tin vào chuyện tâm linh, hoàn toàn mất',
                'trailer' => 'https://youtu.be/iAPNw6M1LIs',
                'image' => 'https://chieuphimquocgia.com.vn/_next/image?url=http%3A%2F%2Fapiv2.chieuphimquocgia.com.vn%2FContent%2FImages%2F0018306_0.jpg&w=384&q=75',
                'price' => 100000,
            ],
            [
                'title' => 'BỘ TỨ BÁO THỦ',
                'category' => 'Hài',
                'duration' => 120,
                'release_date' => '2025-01-29',
                'description' => 'Bộ tứ báo thủ bao gồm Chét-Xi-Cà, Dì Bốn, Cậu Mười Một, Con Kiều chính thức xuất hiện cùng với phi vụ báo thế kỉ. Nghe nói kế hoạch tiếp theo là ở Đà Lạt, liệu bốn báo thủ sẽ quậy Tết tung nóc cỡ nào?',
                'trailer' => 'https://youtu.be/Wi95_AEuhA8',
                'image' => 'https://chieuphimquocgia.com.vn/_next/image?url=http%3A%2F%2Fapiv2.chieuphimquocgia.com.vn%2FContent%2FImages%2F0018305_0.jpg&w=384&q=75',
                'price' => 100000,
            ],
        ]);
    }
}
