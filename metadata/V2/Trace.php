<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace GPBMetadata\Google\Devtools\Cloudtrace\V2;

class Trace
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adc1a0a29676f6f676c652f646576746f6f6c732f636c6f756474726163" .
            "652f76322f74726163652e70726f746f121d676f6f676c652e646576746f" .
            "6f6c732e636c6f756474726163652e76321a1f676f6f676c652f6170692f" .
            "6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f61" .
            "70692f7265736f757263652e70726f746f1a1f676f6f676c652f70726f74" .
            "6f6275662f74696d657374616d702e70726f746f1a1e676f6f676c652f70" .
            "726f746f6275662f77726170706572732e70726f746f1a17676f6f676c65" .
            "2f7270632f7374617475732e70726f746f22d40f0a045370616e120c0a04" .
            "6e616d65180120012809120f0a077370616e5f696418022001280912160a" .
            "0e706172656e745f7370616e5f696418032001280912460a0c646973706c" .
            "61795f6e616d6518042001280b32302e676f6f676c652e646576746f6f6c" .
            "732e636c6f756474726163652e76322e5472756e63617461626c65537472" .
            "696e67122e0a0a73746172745f74696d6518052001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d70122c0a08656e645f74" .
            "696d6518062001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d7012420a0a6174747269627574657318072001280b322e2e" .
            "676f6f676c652e646576746f6f6c732e636c6f756474726163652e76322e" .
            "5370616e2e41747472696275746573123e0a0b737461636b5f7472616365" .
            "18082001280b32292e676f6f676c652e646576746f6f6c732e636c6f7564" .
            "74726163652e76322e537461636b547261636512430a0b74696d655f6576" .
            "656e747318092001280b322e2e676f6f676c652e646576746f6f6c732e63" .
            "6c6f756474726163652e76322e5370616e2e54696d654576656e74731238" .
            "0a056c696e6b73180a2001280b32292e676f6f676c652e646576746f6f6c" .
            "732e636c6f756474726163652e76322e5370616e2e4c696e6b7312270a06" .
            "737461747573180b2001280b32122e676f6f676c652e7270632e53746174" .
            "75734203e0410112440a1b73616d655f70726f636573735f61735f706172" .
            "656e745f7370616e180c2001280b321a2e676f6f676c652e70726f746f62" .
            "75662e426f6f6c56616c75654203e04101123a0a106368696c645f737061" .
            "6e5f636f756e74180d2001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74333256616c75654203e041011aeb010a0a4174747269627574" .
            "657312570a0d6174747269627574655f6d617018012003280b32402e676f" .
            "6f676c652e646576746f6f6c732e636c6f756474726163652e76322e5370" .
            "616e2e417474726962757465732e4174747269627574654d6170456e7472" .
            "7912200a1864726f707065645f617474726962757465735f636f756e7418" .
            "02200128051a620a114174747269627574654d6170456e747279120b0a03" .
            "6b6579180120012809123c0a0576616c756518022001280b322d2e676f6f" .
            "676c652e646576746f6f6c732e636c6f756474726163652e76322e417474" .
            "72696275746556616c75653a0238011adf040a0954696d654576656e7412" .
            "280a0474696d6518012001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d70124e0a0a616e6e6f746174696f6e1802200128" .
            "0b32382e676f6f676c652e646576746f6f6c732e636c6f75647472616365" .
            "2e76322e5370616e2e54696d654576656e742e416e6e6f746174696f6e48" .
            "0012530a0d6d6573736167655f6576656e7418032001280b323a2e676f6f" .
            "676c652e646576746f6f6c732e636c6f756474726163652e76322e537061" .
            "6e2e54696d654576656e742e4d6573736167654576656e7448001a97010a" .
            "0a416e6e6f746174696f6e12450a0b6465736372697074696f6e18012001" .
            "280b32302e676f6f676c652e646576746f6f6c732e636c6f756474726163" .
            "652e76322e5472756e63617461626c65537472696e6712420a0a61747472" .
            "69627574657318022001280b322e2e676f6f676c652e646576746f6f6c73" .
            "2e636c6f756474726163652e76322e5370616e2e41747472696275746573" .
            "1adf010a0c4d6573736167654576656e74124d0a04747970651801200128" .
            "0e323f2e676f6f676c652e646576746f6f6c732e636c6f75647472616365" .
            "2e76322e5370616e2e54696d654576656e742e4d6573736167654576656e" .
            "742e54797065120a0a026964180220012803121f0a17756e636f6d707265" .
            "737365645f73697a655f6279746573180320012803121d0a15636f6d7072" .
            "65737365645f73697a655f627974657318042001280322340a0454797065" .
            "12140a10545950455f554e535045434946494544100012080a0453454e54" .
            "1001120c0a085245434549564544100242070a0576616c75651a98010a0a" .
            "54696d654576656e747312410a0a74696d655f6576656e7418012003280b" .
            "322d2e676f6f676c652e646576746f6f6c732e636c6f756474726163652e" .
            "76322e5370616e2e54696d654576656e7412210a1964726f707065645f61" .
            "6e6e6f746174696f6e735f636f756e7418022001280512240a1c64726f70" .
            "7065645f6d6573736167655f6576656e74735f636f756e74180320012805" .
            "1af7010a044c696e6b12100a0874726163655f6964180120012809120f0a" .
            "077370616e5f6964180220012809123b0a047479706518032001280e322d" .
            "2e676f6f676c652e646576746f6f6c732e636c6f756474726163652e7632" .
            "2e5370616e2e4c696e6b2e5479706512420a0a6174747269627574657318" .
            "042001280b322e2e676f6f676c652e646576746f6f6c732e636c6f756474" .
            "726163652e76322e5370616e2e41747472696275746573224b0a04547970" .
            "6512140a10545950455f554e535045434946494544100012150a11434849" .
            "4c445f4c494e4b45445f5350414e100112160a12504152454e545f4c494e" .
            "4b45445f5350414e10021a5c0a054c696e6b7312360a046c696e6b180120" .
            "03280b32282e676f6f676c652e646576746f6f6c732e636c6f7564747261" .
            "63652e76322e5370616e2e4c696e6b121b0a1364726f707065645f6c696e" .
            "6b735f636f756e74180220012805228e010a0e4174747269627574655661" .
            "6c756512480a0c737472696e675f76616c756518012001280b32302e676f" .
            "6f676c652e646576746f6f6c732e636c6f756474726163652e76322e5472" .
            "756e63617461626c65537472696e67480012130a09696e745f76616c7565" .
            "180220012803480012140a0a626f6f6c5f76616c75651803200128084800" .
            "42070a0576616c75652289050a0a537461636b5472616365124b0a0c7374" .
            "61636b5f6672616d657318012001280b32352e676f6f676c652e64657674" .
            "6f6f6c732e636c6f756474726163652e76322e537461636b54726163652e" .
            "537461636b4672616d6573121b0a13737461636b5f74726163655f686173" .
            "685f69641802200128031a9e030a0a537461636b4672616d6512470a0d66" .
            "756e6374696f6e5f6e616d6518012001280b32302e676f6f676c652e6465" .
            "76746f6f6c732e636c6f756474726163652e76322e5472756e6361746162" .
            "6c65537472696e6712500a166f726967696e616c5f66756e6374696f6e5f" .
            "6e616d6518022001280b32302e676f6f676c652e646576746f6f6c732e63" .
            "6c6f756474726163652e76322e5472756e63617461626c65537472696e67" .
            "12430a0966696c655f6e616d6518032001280b32302e676f6f676c652e64" .
            "6576746f6f6c732e636c6f756474726163652e76322e5472756e63617461" .
            "626c65537472696e6712130a0b6c696e655f6e756d626572180420012803" .
            "12150a0d636f6c756d6e5f6e756d626572180520012803123a0a0b6c6f61" .
            "645f6d6f64756c6518062001280b32252e676f6f676c652e646576746f6f" .
            "6c732e636c6f756474726163652e76322e4d6f64756c6512480a0e736f75" .
            "7263655f76657273696f6e18072001280b32302e676f6f676c652e646576" .
            "746f6f6c732e636c6f756474726163652e76322e5472756e63617461626c" .
            "65537472696e671a700a0b537461636b4672616d657312430a056672616d" .
            "6518012003280b32342e676f6f676c652e646576746f6f6c732e636c6f75" .
            "6474726163652e76322e537461636b54726163652e537461636b4672616d" .
            "65121c0a1464726f707065645f6672616d65735f636f756e741802200128" .
            "05228e010a064d6f64756c6512400a066d6f64756c6518012001280b3230" .
            "2e676f6f676c652e646576746f6f6c732e636c6f756474726163652e7632" .
            "2e5472756e63617461626c65537472696e6712420a086275696c645f6964" .
            "18022001280b32302e676f6f676c652e646576746f6f6c732e636c6f7564" .
            "74726163652e76322e5472756e63617461626c65537472696e6722400a11" .
            "5472756e63617461626c65537472696e67120d0a0576616c756518012001" .
            "2809121c0a147472756e63617465645f627974655f636f756e7418022001" .
            "280542aa010a21636f6d2e676f6f676c652e646576746f6f6c732e636c6f" .
            "756474726163652e7632420a547261636550726f746f50015a47676f6f67" .
            "6c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561" .
            "7069732f646576746f6f6c732f636c6f756474726163652f76323b636c6f" .
            "75647472616365aa0215476f6f676c652e436c6f75642e54726163652e56" .
            "32ca0215476f6f676c655c436c6f75645c54726163655c5632620670726f" .
            "746f33"
        ), true);

        static::$is_initialized = true;
    }
}

