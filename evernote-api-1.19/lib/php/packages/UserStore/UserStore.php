<?php
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
include_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';

include_once $GLOBALS['THRIFT_ROOT'].'/packages/UserStore/UserStore_types.php';

interface UserStoreIf {
  public function checkVersion($clientName, $edamVersionMajor, $edamVersionMinor);
  public function authenticate($username, $password, $consumerKey, $consumerSecret);
  public function refreshAuthentication($authenticationToken);
  public function getUser($authenticationToken);
  public function getPublicUserInfo($username);
}

class UserStoreClient implements UserStoreIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function checkVersion($clientName, $edamVersionMajor, $edamVersionMinor)
  {
    $this->send_checkVersion($clientName, $edamVersionMajor, $edamVersionMinor);
    return $this->recv_checkVersion();
  }

  public function send_checkVersion($clientName, $edamVersionMajor, $edamVersionMinor)
  {
    $args = new edam_userstore_UserStore_checkVersion_args();
    $args->clientName = $clientName;
    $args->edamVersionMajor = $edamVersionMajor;
    $args->edamVersionMinor = $edamVersionMinor;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'checkVersion', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('checkVersion', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_checkVersion()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'edam_userstore_UserStore_checkVersion_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new edam_userstore_UserStore_checkVersion_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new Exception("checkVersion failed: unknown result");
  }

  public function authenticate($username, $password, $consumerKey, $consumerSecret)
  {
    $this->send_authenticate($username, $password, $consumerKey, $consumerSecret);
    return $this->recv_authenticate();
  }

  public function send_authenticate($username, $password, $consumerKey, $consumerSecret)
  {
    $args = new edam_userstore_UserStore_authenticate_args();
    $args->username = $username;
    $args->password = $password;
    $args->consumerKey = $consumerKey;
    $args->consumerSecret = $consumerSecret;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'authenticate', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('authenticate', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_authenticate()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'edam_userstore_UserStore_authenticate_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new edam_userstore_UserStore_authenticate_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new Exception("authenticate failed: unknown result");
  }

  public function refreshAuthentication($authenticationToken)
  {
    $this->send_refreshAuthentication($authenticationToken);
    return $this->recv_refreshAuthentication();
  }

  public function send_refreshAuthentication($authenticationToken)
  {
    $args = new edam_userstore_UserStore_refreshAuthentication_args();
    $args->authenticationToken = $authenticationToken;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'refreshAuthentication', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('refreshAuthentication', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_refreshAuthentication()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'edam_userstore_UserStore_refreshAuthentication_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new edam_userstore_UserStore_refreshAuthentication_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new Exception("refreshAuthentication failed: unknown result");
  }

  public function getUser($authenticationToken)
  {
    $this->send_getUser($authenticationToken);
    return $this->recv_getUser();
  }

  public function send_getUser($authenticationToken)
  {
    $args = new edam_userstore_UserStore_getUser_args();
    $args->authenticationToken = $authenticationToken;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getUser', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getUser', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getUser()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'edam_userstore_UserStore_getUser_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new edam_userstore_UserStore_getUser_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new Exception("getUser failed: unknown result");
  }

  public function getPublicUserInfo($username)
  {
    $this->send_getPublicUserInfo($username);
    return $this->recv_getPublicUserInfo();
  }

  public function send_getPublicUserInfo($username)
  {
    $args = new edam_userstore_UserStore_getPublicUserInfo_args();
    $args->username = $username;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getPublicUserInfo', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getPublicUserInfo', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getPublicUserInfo()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'edam_userstore_UserStore_getPublicUserInfo_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new edam_userstore_UserStore_getPublicUserInfo_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->notFoundException !== null) {
      throw $result->notFoundException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    throw new Exception("getPublicUserInfo failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class edam_userstore_UserStore_checkVersion_args {
  static $_TSPEC;

  public $clientName = null;
  public $edamVersionMajor = 1;
  public $edamVersionMinor = 19;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientName',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'edamVersionMajor',
          'type' => TType::I16,
          ),
        3 => array(
          'var' => 'edamVersionMinor',
          'type' => TType::I16,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['clientName'])) {
        $this->clientName = $vals['clientName'];
      }
      if (isset($vals['edamVersionMajor'])) {
        $this->edamVersionMajor = $vals['edamVersionMajor'];
      }
      if (isset($vals['edamVersionMinor'])) {
        $this->edamVersionMinor = $vals['edamVersionMinor'];
      }
    }
  }

  public function getName() {
    return 'UserStore_checkVersion_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->edamVersionMajor);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->edamVersionMinor);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_checkVersion_args');
    if ($this->clientName !== null) {
      $xfer += $output->writeFieldBegin('clientName', TType::STRING, 1);
      $xfer += $output->writeString($this->clientName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->edamVersionMajor !== null) {
      $xfer += $output->writeFieldBegin('edamVersionMajor', TType::I16, 2);
      $xfer += $output->writeI16($this->edamVersionMajor);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->edamVersionMinor !== null) {
      $xfer += $output->writeFieldBegin('edamVersionMinor', TType::I16, 3);
      $xfer += $output->writeI16($this->edamVersionMinor);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_checkVersion_result {
  static $_TSPEC;

  public $success = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::BOOL,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'UserStore_checkVersion_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_checkVersion_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::BOOL, 0);
      $xfer += $output->writeBool($this->success);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_authenticate_args {
  static $_TSPEC;

  public $username = null;
  public $password = null;
  public $consumerKey = null;
  public $consumerSecret = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'username',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'password',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'consumerKey',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'consumerSecret',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['password'])) {
        $this->password = $vals['password'];
      }
      if (isset($vals['consumerKey'])) {
        $this->consumerKey = $vals['consumerKey'];
      }
      if (isset($vals['consumerSecret'])) {
        $this->consumerSecret = $vals['consumerSecret'];
      }
    }
  }

  public function getName() {
    return 'UserStore_authenticate_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->password);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->consumerKey);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->consumerSecret);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_authenticate_args');
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 1);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->password !== null) {
      $xfer += $output->writeFieldBegin('password', TType::STRING, 2);
      $xfer += $output->writeString($this->password);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->consumerKey !== null) {
      $xfer += $output->writeFieldBegin('consumerKey', TType::STRING, 3);
      $xfer += $output->writeString($this->consumerKey);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->consumerSecret !== null) {
      $xfer += $output->writeFieldBegin('consumerSecret', TType::STRING, 4);
      $xfer += $output->writeString($this->consumerSecret);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_authenticate_result {
  static $_TSPEC;

  public $success = null;
  public $userException = null;
  public $systemException = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => 'edam_userstore_AuthenticationResult',
          ),
        1 => array(
          'var' => 'userException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMUserException',
          ),
        2 => array(
          'var' => 'systemException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMSystemException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['userException'])) {
        $this->userException = $vals['userException'];
      }
      if (isset($vals['systemException'])) {
        $this->systemException = $vals['systemException'];
      }
    }
  }

  public function getName() {
    return 'UserStore_authenticate_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new edam_userstore_AuthenticationResult();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->userException = new edam_error_EDAMUserException();
            $xfer += $this->userException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->systemException = new edam_error_EDAMSystemException();
            $xfer += $this->systemException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_authenticate_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userException !== null) {
      $xfer += $output->writeFieldBegin('userException', TType::STRUCT, 1);
      $xfer += $this->userException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->systemException !== null) {
      $xfer += $output->writeFieldBegin('systemException', TType::STRUCT, 2);
      $xfer += $this->systemException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_refreshAuthentication_args {
  static $_TSPEC;

  public $authenticationToken = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'authenticationToken',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['authenticationToken'])) {
        $this->authenticationToken = $vals['authenticationToken'];
      }
    }
  }

  public function getName() {
    return 'UserStore_refreshAuthentication_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->authenticationToken);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_refreshAuthentication_args');
    if ($this->authenticationToken !== null) {
      $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 1);
      $xfer += $output->writeString($this->authenticationToken);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_refreshAuthentication_result {
  static $_TSPEC;

  public $success = null;
  public $userException = null;
  public $systemException = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => 'edam_userstore_AuthenticationResult',
          ),
        1 => array(
          'var' => 'userException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMUserException',
          ),
        2 => array(
          'var' => 'systemException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMSystemException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['userException'])) {
        $this->userException = $vals['userException'];
      }
      if (isset($vals['systemException'])) {
        $this->systemException = $vals['systemException'];
      }
    }
  }

  public function getName() {
    return 'UserStore_refreshAuthentication_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new edam_userstore_AuthenticationResult();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->userException = new edam_error_EDAMUserException();
            $xfer += $this->userException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->systemException = new edam_error_EDAMSystemException();
            $xfer += $this->systemException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_refreshAuthentication_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userException !== null) {
      $xfer += $output->writeFieldBegin('userException', TType::STRUCT, 1);
      $xfer += $this->userException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->systemException !== null) {
      $xfer += $output->writeFieldBegin('systemException', TType::STRUCT, 2);
      $xfer += $this->systemException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_getUser_args {
  static $_TSPEC;

  public $authenticationToken = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'authenticationToken',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['authenticationToken'])) {
        $this->authenticationToken = $vals['authenticationToken'];
      }
    }
  }

  public function getName() {
    return 'UserStore_getUser_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->authenticationToken);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_getUser_args');
    if ($this->authenticationToken !== null) {
      $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 1);
      $xfer += $output->writeString($this->authenticationToken);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_getUser_result {
  static $_TSPEC;

  public $success = null;
  public $userException = null;
  public $systemException = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => 'edam_type_User',
          ),
        1 => array(
          'var' => 'userException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMUserException',
          ),
        2 => array(
          'var' => 'systemException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMSystemException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['userException'])) {
        $this->userException = $vals['userException'];
      }
      if (isset($vals['systemException'])) {
        $this->systemException = $vals['systemException'];
      }
    }
  }

  public function getName() {
    return 'UserStore_getUser_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new edam_type_User();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->userException = new edam_error_EDAMUserException();
            $xfer += $this->userException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->systemException = new edam_error_EDAMSystemException();
            $xfer += $this->systemException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_getUser_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userException !== null) {
      $xfer += $output->writeFieldBegin('userException', TType::STRUCT, 1);
      $xfer += $this->userException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->systemException !== null) {
      $xfer += $output->writeFieldBegin('systemException', TType::STRUCT, 2);
      $xfer += $this->systemException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_getPublicUserInfo_args {
  static $_TSPEC;

  public $username = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'username',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
    }
  }

  public function getName() {
    return 'UserStore_getPublicUserInfo_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_getPublicUserInfo_args');
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 1);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class edam_userstore_UserStore_getPublicUserInfo_result {
  static $_TSPEC;

  public $success = null;
  public $notFoundException = null;
  public $systemException = null;
  public $userException = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => 'edam_userstore_PublicUserInfo',
          ),
        1 => array(
          'var' => 'notFoundException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMNotFoundException',
          ),
        2 => array(
          'var' => 'systemException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMSystemException',
          ),
        3 => array(
          'var' => 'userException',
          'type' => TType::STRUCT,
          'class' => 'edam_error_EDAMUserException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['notFoundException'])) {
        $this->notFoundException = $vals['notFoundException'];
      }
      if (isset($vals['systemException'])) {
        $this->systemException = $vals['systemException'];
      }
      if (isset($vals['userException'])) {
        $this->userException = $vals['userException'];
      }
    }
  }

  public function getName() {
    return 'UserStore_getPublicUserInfo_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new edam_userstore_PublicUserInfo();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->notFoundException = new edam_error_EDAMNotFoundException();
            $xfer += $this->notFoundException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->systemException = new edam_error_EDAMSystemException();
            $xfer += $this->systemException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRUCT) {
            $this->userException = new edam_error_EDAMUserException();
            $xfer += $this->userException->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UserStore_getPublicUserInfo_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->notFoundException !== null) {
      $xfer += $output->writeFieldBegin('notFoundException', TType::STRUCT, 1);
      $xfer += $this->notFoundException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->systemException !== null) {
      $xfer += $output->writeFieldBegin('systemException', TType::STRUCT, 2);
      $xfer += $this->systemException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userException !== null) {
      $xfer += $output->writeFieldBegin('userException', TType::STRUCT, 3);
      $xfer += $this->userException->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

?>
