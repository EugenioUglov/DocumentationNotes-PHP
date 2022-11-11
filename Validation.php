class Validation {
    public function is_valid_ip(input_ip) {
        $ip_address = input_ip;

        if (filter_var($ip_address, FILTER_VALIDATE_IP)) {
            return true;
        } else {
            return false;
        }
    }
}