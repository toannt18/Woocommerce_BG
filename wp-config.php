<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'woocommerce' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DFhVr/;{OYN)sO[E%K=s,a)R{W)RG|[NooLsi^dc>7}bpW0C$@-7>XJ*O3ZB/QYE' );
define( 'SECURE_AUTH_KEY',  'R3h0VKHq}8f9AolYzIZuoa6GLX@esy+<eznxIEI!T}FputRje- RGYJ8 1Gxn6;7' );
define( 'LOGGED_IN_KEY',    'S8_(VsX2#1Nw`F6%9%})U/DmpjDq|kVMt./ZY8|=8Q%</NP/3V7=0$.Yt0(WMl<Q' );
define( 'NONCE_KEY',        '|${Yk$?dRb Z?AOEdH2X-k[.h%}_sT9,;dp[S zNH(QS`YjIiIcm5Yh:g^GSS84`' );
define( 'AUTH_SALT',        '|EunQp:[(V+j^%p?}o6-J=8Bak@J&`D8=Hxz{|8~`+:ngGL(AQTL^`U2kh3.gc+K' );
define( 'SECURE_AUTH_SALT', 'T5(.-B*1W/J*V#^%ep9dC{|zM<O{9%{Lj`o(PgmnP}53S.tCF)HgUkW9Od`efqOK' );
define( 'LOGGED_IN_SALT',   '_E#c:q@CLNubaUU5O!d>..iSpQ[(dH+=n:q}uAM]o|)J{Vqb&/?:dMe:Agwkf4D;' );
define( 'NONCE_SALT',       'hv%b!zlAU|Uzr:RG7=2t_wIFY46=gGHuN@dK.v}0yz7lo|OF-m#=nO5yWj=d(!#=' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
