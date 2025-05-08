import { useState } from "react";
// import styled from "styled-components";

// react-bootstrap
import Modal from "react-bootstrap/Modal";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import Input from "../components/Input";
import BigButton from "../components/BigButton";

const PasswordReset = () => {
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");

  const isButtonDisabled = () => {
    // 비밀번호와 확인 비밀번호가 일치할 때만 버튼을 활성화
    return password === "" || confirmPassword === "" || password !== confirmPassword;
  };

  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  return (
    <>
      {/* Header */}
      <Header type="title" title="Password Reset" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Create Password</InputTitle>
              <InputGroup>
                <Input placeholder="Password" type="password" icon="password" value={password} onChange={(e) => setPassword(e.target.value)}></Input>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Confirm Password</InputTitle>
              <InputGroup>
                <Input placeholder="Password" type="password" icon="password" value={confirmPassword} onChange={(e) => setConfirmPassword(e.target.value)} />
              </InputGroup>
            </Form.Group>
          </Form>
        </PageContent>
        <PageBtnbox>
          <BigButton disabled={isButtonDisabled()} onClick={handleShow}>
            Confirm
          </BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />

      {/* Modal */}
      <Modal show={show} onHide={handleClose} className="type2" centered>
        <Modal.Header closeButton></Modal.Header>
        <Modal.Body>
          <p className="title">Password has been reset!</p>
          <p className="desc">You may now return to your account.</p>
        </Modal.Body>
        <Modal.Footer>
          <BigButton onClick={handleClose}>Return</BigButton>
        </Modal.Footer>
      </Modal>
    </>
  );
};

export default PasswordReset;
