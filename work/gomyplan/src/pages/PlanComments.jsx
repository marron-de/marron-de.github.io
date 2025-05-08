import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
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

// img
import IconPlus from "../assets/img/icon_plus.png";
import IconMove from "../assets/img/icon_move.png";
import DarkIconMove from "../assets/img/dark_icon_move.png";

// style
const CommentTitBox = styled.div`
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;

  .formbox {
    margin-bottom: 10px;
  }
`;

const AddBtnBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6px;
`;

const AddButton = styled.button`
  display: flex;
  align-items: center;
  gap: 4px;
  width: 100%;

  &::before {
    content: "";
    background: url(${IconPlus}) no-repeat center / contain;
    width: 30px;
    aspect-ratio: 1 / 1;
  }
`;

const AddButtonTxt = styled.div`
  flex: 1;
  font-weight: 500;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  text-align: left;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const DescWrapper = styled.div`
  display: flex;
  flex-direction: column;
  gap: 25px;
  margin-bottom: 25px;
  margin-top: 30px;
`;

const DescBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6px;
`;

const DescTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const DescList = styled.div`
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  border-radius: 8px;
  padding: 12px 20px;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 4px;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const DescItem = styled.p`
  position: relative;
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  padding-left: 0.9em;
  transition: var(--transition);

  &::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0.5em;
    border-radius: 100px;
    width: 3px;
    aspect-ratio: 1 / 1;
    background: var(--color-point);
  }

  .darkMode & {
    color: var(--color-gray);
  }
`;

const CommentList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6px;
  margin-bottom: 20px;
`;

const CommentItem = styled.div`
  border: 1px solid var(--color-border2);
  border-radius: 10px;
  padding: 6px 10px;
  background: var(--color-white);
  display: flex;
  align-items: center;
  gap: 10px;
  transition: var(--transition);

  .darkMode & {
    border: 1px solid var(--color-border);
    background: var(--color-darkgray2);
  }
`;

const CommentTxt = styled.p`
  flex: 1;
  font-family: var(--font-family);
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const CommentMove = styled.button`
  background: url(${IconMove}) no-repeat center / contain;
  width: 20px;
  aspect-ratio: 1 / 1.2;
  cursor: pointer;
  transition: var(--transition);

  .darkMode & {
   background-image: url(${DarkIconMove}); 
  }
`;

const PlanComments = () => {
  const [comment, setComment] = useState("");

  const isButtonDisabled = () => {
    // 버튼 활성화 여부를 결정
    return comment === "";
  };

  return (
    <>
      {/* Header */}
      <Header type="title2" title="Plan Comments" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <CommentTitBox>
            <Form className="formbox">
              <Form.Group className="formitem">
                <InputTitle className="input_title">Comments</InputTitle>
                <InputGroup>
                  <Input placeholder="Comment on plan..." type="text" icon="write" value={comment} onChange={(e) => setComment(e.target.value)} />
                </InputGroup>
              </Form.Group>
            </Form>
            <AddBtnBox>
              <AddButton>
                <AddButtonTxt>Add a comment</AddButtonTxt>
              </AddButton>
            </AddBtnBox>
          </CommentTitBox>
          <CommentList>
            <CommentItem>
              <CommentTxt>The dim sum restaurant I saw on Yo...</CommentTxt>
              <CommentMove></CommentMove>
            </CommentItem>
            <CommentItem>
              <CommentTxt>It’s a place you can’t get to by trans...</CommentTxt>
              <CommentMove></CommentMove>
            </CommentItem>
          </CommentList>
          <DescWrapper>
            <DescBox>
              <DescTitle>How to Reserve</DescTitle>
              <DescList>
                <DescItem>Feature description 01</DescItem>
                <DescItem>Feature description 02</DescItem>
                <DescItem>Feature description 03</DescItem>
              </DescList>
            </DescBox>
            <DescBox>
              <DescTitle>Terms of Use</DescTitle>
              <DescList>
                <DescItem>Feature description 01</DescItem>
                <DescItem>Feature description 02</DescItem>
                <DescItem>Feature description 03</DescItem>
              </DescList>
            </DescBox>
          </DescWrapper>
        </PageContent>
        <PageBtnbox>
          <BigButton disabled={isButtonDisabled()}>Confirm</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default PlanComments;
